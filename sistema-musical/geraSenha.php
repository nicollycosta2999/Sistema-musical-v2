## Gerar senha segura (`geraSenha.php`)
```php

<?php
// Rodar no terminal php geraSenha.php
echo password_hash('123', PASSWORD_BCRYPT);
?>