<?php  
/*
|--------------------------------------------------------------------------
| ContatoAdminForm.php
|--------------------------------------------------------------------------|
| Arquivo parte administrativa do formulário de contato
| author Davi Bernardo <davi.santos@extreme.digital>
| version 1.1
| copyright Proderj 2021.
*/

/**  
 * @file  
 * Contains Drupal\contato\Form\ContatoAdminForm.  
 */  

namespace Drupal\contato\Form;  

use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  

/**
 * Configuração do formulário de contato
 */
class ContatoAdminForm extends ConfigFormBase {  
  /**  
   * {@inheritdoc}  
   */  
  protected function getEditableConfigNames() {  
    return [  
      'contato.adminsettings',  
    ];  
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function getFormId() {  
    return 'contato_admin_form';  
  }  
  
  /**  
   * {@inheritdoc}  
   */  
  public function buildForm(array $form, FormStateInterface $form_state) {  
    $config = $this->config('contato.adminsettings');  

    $form['contato_admin_email'] = array(  
      '#type' => 'email',  
      '#title' => $this->t('Email address'),  
      '#description' => $this->t('Endereço de e-mail para o qual os dados do formulário de contato devem ser enviados'),  
      '#default_value' => $config->get('contato_admin_email'),  
      '#required' => TRUE,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Salvar'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /**
     * Valida email
     */
    $contato_admin_email = trim($form_state->getValue('contato_admin_email'));
  
    if ($contato_admin_email !== '' && !\Drupal::service('email.validator')->isValid($contato_admin_email)) {
      $form_state->setErrorByName('contato_admin_email', $this->t('Invalid email address'));  
    }
  }

  /**  
   * {@inheritdoc}  
   */  
  public function submitForm(array &$form, FormStateInterface $form_state) {  
    $this->config('contato.adminsettings')  
      ->set('contato_admin_email', trim($form_state->getValue('contato_admin_email')))  
      ->save();  
  }    
}
