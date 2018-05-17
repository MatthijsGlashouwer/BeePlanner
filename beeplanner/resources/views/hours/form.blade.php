<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Opmerking:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Opmerking','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Uren:</strong>
            {!! Form::number('uren', null, array('placeholder' => 'Uren','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Totaal uren:</strong>
            {!! Form::number('totaaluren', null, array('placeholder' => 'Totaal uren','class' => 'form-control')) !!}
        </div>
    </div> 


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>uren maandag:</strong>
            {!! Form::number('maandag', null, array('placeholder' => 'uren maandag','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>uren dinsdag:</strong>
            {!! Form::number('dinsdag', null, array('placeholder' => 'uren dinsdag','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>uren woensdag:</strong>
            {!! Form::number('woensdag', null, array('placeholder' => 'uren woensdag','class' => 'form-control')) !!}
        </div>
    </div> 	
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>uren donderdag:</strong>
            {!! Form::number('donderdag', null, array('placeholder' => 'uren donderdag','class' => 'form-control')) !!}
        </div>
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>uren vrijdag:</strong>
            {!! Form::number('vrijdag', null, array('placeholder' => 'uren vrijdag','class' => 'form-control')) !!}
        </div>
    </div> 		
	
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resterende uren:</strong>
            {!! Form::number('resterendeuren', null, array('placeholder' => 'Resterende uren','class' => 'form-control')) !!}
        </div>
    </div> 	

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Weeknummer</strong>
            {!! Form::number('week', null, array('placeholder' => 'weeknummer opdracht','class' => 'form-control')) !!}
        </div>
    </div>
	

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


