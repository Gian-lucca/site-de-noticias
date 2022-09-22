<?php
/*
|--------------------------------------------------------------------------
| ContatoFormBlock.php
|--------------------------------------------------------------------------|
| Arquivo Fornece o block do Formulário de contato.
| usuário
| author Davi Bernardo <davi.santos@extreme.digital>
| version 1.1
| copyright Proderj 2021.
*/
namespace Drupal\contato\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Fornece o block do Formulário de contato.
 *
*/
class ContatoFormBlock extends BlockBase {

 /**
  * {@inheritdoc}
 */
 public function build() {
  /**
   * Inclue o tamanho dos campos do formulário
   */
   $form = \Drupal::formBuilder()->getForm('Drupal\contato\Form\ContatoForm');
   $form['contatoprotocolo']['#size'] = 20;
   $form['contatonome']['#size'] = 20;
   $form['contatosugestao']['#size'] = 20;
   $form['contatoemail']['#size'] = 20;
   $form['contatotelefone']['#size'] = 20;
   $form['contatomensagem']['#rows'] = 3;
   $form['contatomensagem']['#cols'] = 18;
   
   return $form;
 }
 
}
