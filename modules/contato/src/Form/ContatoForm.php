<?php

/*
|--------------------------------------------------------------------------
| ContatoForm.php
|--------------------------------------------------------------------------|
| Arquivo Classe que implementa toda contrução dos campos do formulário
| author Davi Bernardo <davi.santos@extreme.digital>
| version 1.1
| copyright Proderj 2021.
*/

/**
 * @file
 * Contains \Drupal\contato\Form\ContatoForm.
 * ClassForm
 */

namespace Drupal\contato\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Formulário de Contato
 */
class ContatoForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contato_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $protocolo = date("Ymd").rand(2,999);;
    $form['contatoprotocolo'] = array(
      '#type' => 'hidden',
      '#title' => t('Seu Protocolo, você receberá o mesmo por email'),
      '#size' => 60,
      '#maxlength' => 100,
      '#value' => $protocolo,
      '#attributes'=> [
        'class' => ['inputs'],
        'readonly' => 'readonly'
      ]
    );
    $form['contatonome'] = array(
      '#type' => 'textfield',
      '#title' => t('Nome Completo'),
      '#size' => 60,      
      '#maxlength' => 60,
      '#required' => TRUE,
      '#attributes'=> [
        'placeholder' => 'Nome Completo',
        'class' => ['inputs']
      ]
    );	 
  
    $form['contatoemail'] = array(
      '#type' => 'email',
      '#title' => t('E-mail'),
      '#size' => 60,
      '#maxlength' => 100,
      '#required' => TRUE,
      '#attributes'=> [
        'placeholder' => 'E-mail válido',
        'class' => ['inputs']
      ]
    );
    /*$form['contatotelefone'] = array(
      '#type' => 'tel',
      '#title' => t('Telefone'),
      '#size' => 60,
      '#maxlength' => 100,
      '#required' => TRUE,
      '#attributes'=> [
        'class' => ['inputs']
      ]
    );*/
    $form['contatosugestao'] = array(
      '#type' => 'textfield',
      '#title' => t('Sugestão'),
      '#size' => 60,
      '#maxlength' => 100,
      '#required' => TRUE,
      '#attributes'=> [
        'class' => ['inputs'],
        'placeholder' => 'Sugestão',
      ]
    );
    $form['contatomensagem'] = array(
      '#type' => 'textarea',
      '#title' => t('Mensagem'),
      '#rows' => 5,
      '#cols' => 45,
      '#maxlength' => 1000,
      '#required' => TRUE,
      '#resizable' => 'none',
      '#attributes'=> [
        'placeholder' => 'Mensagem',
        'class' => ['inputs']        
      ]
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Enviar Contato'),
      '#attributes'=> [
        'class' => ['botao']
      ]
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
	/**
	 * Valida nome
	 * Apenas letras
     */
    $contatonome = trim($form_state->getValue('contatonome'));
    
    if (!preg_match("/^([a-zA-Z ]+)$/", $contatonome)) {
	    $form_state->setErrorByName('contatonome', $this->t('Carateres inválidos no seu nome'));
    }
    
    /**
     * Valida email
     */
    $contatoemail = trim($form_state->getValue('contatoemail'));
  
    if ($contatoemail !== '' && !\Drupal::service('email.validator')->isValid($contatoemail)) {
      $form_state->setErrorByName('contatoemail', $this->t('Endereço de email inválido'));  
    }

    /**
     * Valida telefone apenas número
     */
    $contatotelefone = trim($form_state->getValue('contatotelefone'));

    if (preg_match('/[\Aa-z\z]/i', $contatotelefone)) {
      $form_state->setErrorByName('contatotelefone', $this->t('O telefone não pode conter letras'));  
    }

    /**
     * Valida mensagem
     */
    $contatomensagem = trim($form_state->getValue('contatomensagem'));
  
    if ($contatomensagem == '') {
      $form_state->setErrorByName('contatomensagem', $this->t('A mensagem não pode estar vazia'));  
    }

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /**
     * Pega os dados do Imput
     */
    $contatoprotocolo = trim($form_state->getValue('contatoprotocolo'));
    $contatonome = trim($form_state->getValue('contatonome'));
    $contatoemail = trim($form_state->getValue('contatoemail'));
    $contatotelefone = trim($form_state->getValue('contatotelefone'));
    $contatosugestao = trim($form_state->getValue('contatosugestao'));
    $contatomensagem = trim($form_state->getValue('contatomensagem'));
    
    /**
     * Salva os dados do formulário de contato
     */
     $node = Node::create([
     'type' => 'contato_form',
     'langcode' => 'en',
     'created' => \Drupal::time()->getRequestTime(),
     'changed' => \Drupal::time()->getRequestTime(),
     // Default admin user ID.
     'uid' => 1,
     'title' => t('Formulário de Contato'),
     'field_contato_protocolo' => $contatoprotocolo,
     'field_contato_nome' => $contatonome,
     'field_contato_sugestao' => $contatosugestao,
     'field_contato_email' => $contatoemail,
     'field_contato_telefone' => $contatotelefone,
     'field_contato_mensagem' => $contatomensagem,
     'status' => 0,
     'promote' => 0,
    ]);
    $node->save();
    
    /**
     * Pega o email que será enviado 
     */
    $config = $this->config('contato.adminsettings');
    $contato_admin_email = trim($config->get('contato_admin_email'));
    
    if ($contato_admin_email) {
      /**
       * Envia email
       */
      $mail_manager = \Drupal::service('plugin.manager.mail');
      $langcode = \Drupal::currentUser()->getPreferredLangcode();
      $params['message']['contatoprotocolo'] = $contatoprotocolo;
      $params['message']['contatonome'] = $contatonome;
      $params['message']['contatosugestao'] = $contatosugestao;
      $params['message']['contatoemail'] = $contatoemail;
      $params['message']['contatotelefone'] = $contatotelefone;
      $params['message']['contatomensagem'] = $contatomensagem;
      
      $to = $contato_admin_email;
      //envia email para o email que foi salvo no painel de administrativo
      $result = $mail_manager->mail('contato', 'contato_notificacao', $to, $langcode, $params, NULL, 'true');
      //envia protocolo para o usuário que solicitou o email
      $result = $mail_manager->mail('contato', 'contato_protocolo', $contatoemail, $langcode, $params, NULL, 'true');
   }

    /**
     * Retorna mensagem Sucesso
     */
    \Drupal::messenger()->addStatus(t('Obrigado ' . $contatonome . '! Sua mensagem foi enviada com sucesso! Enviamos o Protocolo<b> '.$contatoprotocolo.' </b> para seu email!'));
  }
 
}
