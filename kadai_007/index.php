<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

    print_r($user_names);

    echo '<br>';

    $user_names[1] = '侍花子';

    $user_names[] = '侍五郎';

    print_r($user_names);

    ?>
    
  </p>
</body>
</html>