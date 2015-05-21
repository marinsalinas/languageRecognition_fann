<?php
$num_input = 26;
$num_output = 4;
$num_layers = 3;
$num_neurons_hidden = 10;
$desired_error = 0.0001;
$max_epochs = 50000;
$epochs_between_reports = 10;

$ann = fann_create_standard($num_layers, $num_input, $num_neurons_hidden, $num_output);

if ($ann) {
    fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
    fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

    $filename = dirname(__FILE__) . "/frequencies.data";
    if (fann_train_on_file($ann, $filename, $max_epochs, $epochs_between_reports, $desired_error))
        fann_save($ann, dirname(__FILE__) . "/language.net");

    fann_destroy($ann);
}
?>