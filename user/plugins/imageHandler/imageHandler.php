<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class ImageHandlerPlugin extends Plugin
{
  /**
   * @return array
   */
  public static function getSubscribedEvents() {
    return [
      'onPageContentProcessed' => ['onPageContentProcessed', 0]
    ];
  }

  public function onPageContentProcessed(Event $event)
  {
    $page = $event['page'];
    $buffer = $page->content();
    $url = $page->url();
    print($buffer);
    // w/ size & caption
    $buffer = preg_replace("/<p>{image source=\"(.*?)\" size=\"(.*?)\" caption=\"(.*?)\"}<\/p>/",
      "<div class='image-wrapper image-wrapper--$2'><img src='$1' class='image--$2'/><p class='image-caption'>$3</p></div>",
      $buffer);
    // w/ size
    $buffer = preg_replace("/<p>{image source=\"(.*?)\" size=\"(.*?)\"}<\/p>/",
      "<div class='image-wrapper image-wrapper--$2'><img src='$1' class='image--$2'/></div>",
      $buffer);
    // default
    $buffer = preg_replace("/<p>{image source=\"(.*?)\"}<\/p>/",
      "<div class='image-wrapper image-wrapper--m'><img src='$1' class='image--m'/></div>",
      $buffer);
    $page->setRawContent($buffer);
  }
}
