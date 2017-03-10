<?php
# A Tab represents the model for a tab in tabbed content.
class Project {
  private $title;
  private $image;
  private $imageTitle;

  # Creates a new Tab object with the given title, image, and image title.
  public function __construct($title, $image, $imageTitle = NULL) {
    $this->title = $title;
    $this->image = $image;
    $this->imageTitle = $imageTitle ? $imageTitle : $title;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getLink() {
    return $this->link;
  }

  public function getImage() {
    return $this->image;
  }

  public function getImageTitle() {
    return $this->imageTitle;
  }
}

?>
