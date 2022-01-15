<?php


  class Page{

    public static function pageHeader(){
      $header = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../../css/style.css" rel="stylesheet">'.
            self::importCss()
            .'<title>Gustavo Freitas - Portfolio</title>
        </head>
          <body>
      ';
      echo $header;
    }

    private static function importCss(){
      $bootStrapCss = '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      ';
      $fontAwesome = '
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
      ';
      $w3SchoolCss = '
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      ';
      return $bootStrapCss."\n".$w3SchoolCss."\n".$fontAwesome;
    }

    private static function importScript(){
      $bootStrapScript = '
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      ';
      return '';
    }
    public static function pageFooter(){
      $footer = '
        </body>
      </html>
      ';
      echo $footer;
    }
  }