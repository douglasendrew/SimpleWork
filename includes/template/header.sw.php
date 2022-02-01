<?php 
    require __DIR__ . "/../../vendor/autoload.php";
    use SimpleWork\Framework\Page\Site;
    use SimpleWork\Core\Run;
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><?php Run::loadIncludes(); ?><title><?= Site::genTitlePage() ?></title></head><body>