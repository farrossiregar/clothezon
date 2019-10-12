@extends('Layout-Admin.app')

@section('title', 'Dashboard Admin')

@section('content')
        

<form>

    <div class="card-panel">
        <h4>Create New Product</h4>

        <!-- Text Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <input id="input_text" type="text" class="validate" placeholder="Placeholder">
                    <label for="input_text">Text Field</label>
                </div>
            </div>
        </div>
        <!-- /Text Field -->

        <!-- Right Aligned Text Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field align-right">
                    <input id="input_text_ra" type="text" class="validate">
                    <label for="input_text_ra">Right Aligned</label>
                </div>
            </div>
        </div>
        <!-- /Right Aligned Text Field -->

        <!-- Center Aligned Text Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field align-center">
                    <input id="input_text_ca" type="text" class="validate">
                    <label for="input_text_ca">Center Aligned</label>
                </div>
            </div>
        </div>
        <!-- /Center Aligned Text Field -->

        <!-- Disabled Text Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <input id="input_disabled" type="text" class="validate" disabled>
                    <label for="input_disabled">Disabled Text Field</label>
                </div>
            </div>
        </div>
        <!-- /Disabled Text Field -->

        <!-- Password Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <input id="input_password" type="password" class="validate">
                    <label for="input_password">Password</label>
                </div>
            </div>
        </div>
        <!-- /Password Field -->

        <!-- Email Field -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <input id="input_email" type="email" class="validate">
                    <label for="input_email">Email</label>
                </div>
            </div>
        </div>
        <!-- /Email Field -->

        <!-- Textarea -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>
            </div>
        </div>
        <!-- /Textarea -->

        <!-- Textarea Right Aligned -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field align-right">
                    <textarea id="textarea_ra" class="materialize-textarea"></textarea>
                    <label for="textarea_ra">Textarea Right Aligned</label>
                </div>
            </div>
        </div>
        <!-- /Textarea Right Aligned -->

        <!-- Textarea Center Aligned -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field align-center">
                    <textarea id="textarea_ra" class="materialize-textarea"></textarea>
                    <label for="textarea_ra">Textarea Center Aligned</label>
                </div>
            </div>
        </div>
        <!-- /Textarea Center Aligned -->

        <!-- Text Field with Icon -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <i class="mdi-action-thumb-up prefix"></i>
                    <input id="input_text_icon" type="text" class="validate">
                    <label for="input_text_icon">Text Field with Icon</label>
                </div>
            </div>
        </div>
        <!-- /Text Field with Icon -->

        <!-- Textarea with Icon -->
        <div class="row">
            <div class="col l5 s12">
                <div class="input-field">
                    <i class="mdi-communication-chat prefix"></i>
                    <textarea id="textarea_icon" class="materialize-textarea"></textarea>
                    <label for="textarea_icon">Textarea with Icon</label>
                </div>
            </div>
        </div>
        <!-- /Textarea with Icon -->
    </div>
</form>

@endsection