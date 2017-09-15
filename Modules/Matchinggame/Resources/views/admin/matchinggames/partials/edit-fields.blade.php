<div class="box-body">
    <? $images = array('Ingen vald','bild1', 'bild2', 'bild4', 'bild6','bild7','bild8','bild9','bild10','bild11','bild12','bild13','bild14','bild15','bild16','bild17','bild18','bild19','bild20','bild21','bild22','bild24','bild26','bild25','bild27','bild28','bild29','bild30','annan-bild') ?>
    <div class="row">
        <div class="col-sm-2">
            {!! Form::normalCheckbox('theme_active', 'Aktivt tema', $errors, $matchinggame) !!}
        </div>
        <div class="col-sm-10">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::normalInput('name', 'Namn', $errors, $matchinggame) !!}
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::normalInput('description', 'Beskrivning', $errors, $matchinggame) !!}
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalSelect('prio', 'Prioritet', $errors, array('Låg' => 'Låg', 'Medium' => 'Medium', 'Hög' => 'Hög'), $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class='input-group date'>
                    <label for="from_date">Från datum</label>
                    <input type='text' name="from_date" class="form-control" value="{!! $matchinggame->from_date !!}"/>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                <div class='input-group date'>
                    <label for="to_date">Till datum</label>
                    <input type='text' name="to_date" class="form-control" value="{!! $matchinggame->to_date !!}"/>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::normalSelect('bkg_image', 'Stor bakgrundsbild', $errors, $images, $matchinggame) !!} 
        </div>
        <div class="col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_0', 'Bild 1', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_1', 'Bild 2', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_2', 'Bild 3', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_3', 'Bild 4', $errors, $images, $matchinggame) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_4', 'Bild 5', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_5', 'Bild 6', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_6', 'Bild 7', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_7', 'Bild 8', $errors, $images, $matchinggame) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_8', 'Bild 9', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('match_image_9', 'Bild 10', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('cover_image', 'Täckbild', $errors, $images, $matchinggame) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('video', 'Video', $errors, $images, $matchinggame) !!}
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
