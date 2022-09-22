<?php  
/*
|--------------------------------------------------------------------------
| ContribuicaoAdminForm.php
|--------------------------------------------------------------------------|
| Arquivo parte administrativa do formulário de contribuição
| author Davi Bernardo <davi.santos@extreme.digital>
| version 1.1
| copyright Proderj 2021.
*/

/**  
 * @file  
 * Contains Drupal\contribuicao\Form\ContribuicaoAdminForm.  
 */  

namespace Drupal\contribuicao\Form;  

use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  

/**
 * Configuração do formulário de contribuicao
 */
class ContribuicaoAdminForm extends ConfigFormBase {  
  /**  
   * {@inheritdoc}  
   */  
  protected function getEditableConfigNames() {  
    return [  
      'contribuicao.adminsettings',  
    ];  
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function getFormId() {  
    return 'contribuicao_admin_form';  
  }  
  
  /**  
   * {@inheritdoc}  
   */  
  public function buildForm(array $form, FormStateInterface $form_state) {  
    $config = $this->config('contribuicao.adminsettings');  

    $form['contribuicao_admin_email'] = array(  
      '#type' => 'email',  
      '#title' => $this->t('Email'),  
      '#description' => $this->t('Endereço de e-mail para o qual os dados do formulário de contribuicao devem ser enviados'),  
      '#default_value' => $config->get('contribuicao_admin_email'),  
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
    $contribuicao_admin_email = trim($form_state->getValue('contribuicao_admin_email'));
  
    if ($contribuicao_admin_email !== '' && !\Drupal::service('email.validator')->isValid($contribuicao_admin_email)) {
      $form_state->setErrorByName('contribuicao_admin_email', $this->t('E-mail inválido!'));  
    }
  }

  /**  
   * {@inheritdoc}  
   */  
  public function submitForm(array &$form, FormStateInterface $form_state) {  
    $this->config('contribuicao.adminsettings')  
      ->set('contribuicao_admin_email', trim($form_state->getValue('contribuicao_admin_email')))  
      ->save();  
  }    
}
