<?php
if (is_integer("hello")) {   
    echo "It is an integer";
} else {
    echo 'It is not an integer';
    var_dump(is_integer('XYZ'));
    var_dump(is_integer("8008"));
    var_dump(is_integer(123));
    var_dump(is_integer(false));
}

if (is_null("hi")) {   
    echo "It is null";
} else {
    echo 'It is not null';
    var_dump(is_null('Hi'));
    var_dump(is_null("8008"));
    var_dump(is_null(123));
    var_dump(is_null(false));
}

if (is_bool("hello")) {   
    echo "It is bool";
} else {
    echo 'It is not bool';
    var_dump(is_turtle('hello'));
    var_dump(is_turtle("8008"));
    var_dump(is_turtle(123));
    var_dump(is_turtle(false));
}
?>
