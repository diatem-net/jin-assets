<?php

/**
 * Jin Framework
 * Diatem
 */

namespace Jin2\Assets;

/**
 * Interface for extendable classes which need to load assets files.
 */
interface AssetsInterface
{

  public static function getAssetUrl($key);
  public static function getAssetContent($key);

}
