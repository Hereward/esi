<? if(!$useMain) return; ?>

<? include($doc_head_path); ?>

<? include($taskbar_path); ?>

<? include($navbar_path); ?>

<? if ($inc_carousel) {include($carousel_path);} ?>

<? if ($content_path) { include($content_path);}?>

<? include($footer_path); ?>

<? include($doc_foot_path); ?>
