<?php
# A Project represents the model for a project in a portfolio.
class Project {
  private $title;
  private $link;
  private $image;
  private $imageTitle;

  # Creates a new Project object with the given title, link, image, and image
  # title.
  public function __construct($title, $link, $image, $imageTitle = NULL) {
    $this->title = $title;
    $this->link = $link;
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
