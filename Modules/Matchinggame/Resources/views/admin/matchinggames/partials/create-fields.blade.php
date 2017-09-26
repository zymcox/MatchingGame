<div class="box-body">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::normalCheckbox('theme_active', 'Aktivt tema', $errors) !!}
        </div>
        <div class="col-sm-10">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::normalInput('name', 'Namn', $errors) !!}
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::normalInput('description', 'Beskrivning', $errors) !!}
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalSelect('prio', 'Prioritet', $errors, array('Välj...', 'Låg', 'Medium', 'Hög')) !!}
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class='input-group date'>
                    <label for="from_date">Från datum</label>
                    <input type='text' name="from_date" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                <div class='input-group date'>
                    <label for="to_date">Till datum</label>
                    <input type='text' name="to_date" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @mediaSingle('bkg_image', null, null, 'Stor bakgrundsbild')
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
             @mediaSingle('match_image_0', null, null, 'Bild 1')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_1', null, null, 'Bild 2')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_2', null, null, 'Bild 3')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_3', null, null, 'Bild 4')
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
             @mediaSingle('match_image_4', null, null, 'Bild 5')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_5', null, null, 'Bild 6')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_6', null, null, 'Bild 7')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_7', null, null, 'Bild 8')
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
             @mediaSingle('match_image_8', null, null, 'Bild 9')
        </div>
        <div class="col-sm-3">
             @mediaSingle('match_image_9', null, null, 'Bild 10')
        </div>
        <div class="col-sm-3">
             @mediaSingle('cover_image', null, null, 'Täckbild')
        </div>
        <div class="col-sm-3">
            @mediaSingle('video', null, null, 'Video')
        </div>
    </div>

    <script type="text/javascript">
    $(function() {
        $('input[name="from_date"]').daterangepicker({
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

         $('input[name="to_date"]').daterangepicker({
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
    </script>
