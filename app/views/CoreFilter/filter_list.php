<?php
echo '<pre>';
print_r(array_flip(array_map('filter_id', array_combine(filter_list(), filter_list()))));
echo '</pre>';
?>