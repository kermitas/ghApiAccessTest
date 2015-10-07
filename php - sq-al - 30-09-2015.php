<p data-l10n-context="context" data-l10n-hint="hint">Content 1</p>

<h1>string</h1>

<p>string</p>
<p lang="">Content 1</p>
<div>non-translatable string</div>
<div lang="en">Content 1</div>

<?php
    echo "Content 2";
    echo _("string");
    echo __('string');
    echo ___('string');
?>

<script type="text/javascript">
    alert("Content 3");
    alert(___('Content 4'));
</script>
