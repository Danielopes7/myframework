<?php $name = $request->query->get('name', 'World') ?>

Goodbye <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>