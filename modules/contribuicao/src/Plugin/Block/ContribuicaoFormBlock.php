<?php
/*
|--------------------------------------------------------------------------
| ContribuicaoFormBlock.php
|--------------------------------------------------------------------------|
| Arquivo Fornece o block do Formulário de contribuicao.
| usuário
| author Davi Bernardo <davi.santos@extreme.digital>
| version 1.1
| copyright Proderj 2021.
*/
namespace Drupal\contribuicao\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Fornece o block do Formulário de contribuicao.
 *
*/
class ContribuicaoFormBlock extends BlockBase {

 /**
  * {@inheritdoc}
 */
 public function build() {
  /**
   * Inclue o tamanho dos campos do formulário
   */
   $form = \Drupal::formBuilder()->getForm('Drupal\contribuicao\Form\ContribuicaoForm');
   $form['contribuicaoprotocolo']['#size'] = 20;
   $form['contribuicaonome']['#size'] = 20;
   $form['contribuicaocpf']['#size'] = 20;
   $form['contribuicaoorgao']['#size'] = 20;
   $form['contribuicaocargo']['#size'] = 20;
   $form['contribuicaominuta']['#size'] = 20;
   $form['contribuicaoemail']['#size'] = 20;
   $form['contribuicaotexto']['#rows'] = 3;
   $form['contribuicaotexto']['#cols'] = 18;
   $form['contribuicaojustificativa']['#rows'] = 3;
   $form['contribuicaojustificativa']['#cols'] = 18;
   
   return $form;
 }
 
}
