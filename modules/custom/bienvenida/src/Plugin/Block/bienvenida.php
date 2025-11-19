<?php 
namespace Drupal\bienvenida\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Bienvenida' Block.
 * 
 * @Block(
 * id="bienvenida drupal",
 * admin_label = @translation("Drupal Block"),
 * category = @translation("Drupal Block"),
 * )
 */

class bienvenida extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build(){
        return [
            '#markup' => $this->t(string: 'Bienvenido a mi primera web en Drupal'),
        ];
    }
}