<?php

namespace Drupal\x1_eme_block_content;

/**
 * Alters the module's hook implementations.
 */
class ModuleImplementsAlterer {

  /**
   * Suppresses content moderation entity save hooks.
   */
  public static function alter(&$implementations, $hook) {
    if (in_array($hook, ['entity_update', 'entity_presave', 'entity_insert'])) {
      unset($implementations['content_moderation']);
    }
  }

}
