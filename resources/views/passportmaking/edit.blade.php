<!--  -->

<div class="panel-group" id="accordion-test-2"> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" aria-expanded="false" class="collapsed">
                    Basic Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-2" class="panel-collapse collapse"> 
            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 1], 'class' => 'form-horizontal','files' => true)) !!}


              <!--   <a href="#" class="list-group-item active posting-modal-header">
                    Basic Info.
                </a> -->
                
                <div class="form-group">
                    {!! Form::label('name', 'Name : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('name', null, array('class' => 'form-control',  'placeholder' => 'Name', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('passport_no', 'Passport No : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('passport_no', null, array('class' => 'form-control',  'placeholder' => 'Passport No', 'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('broker_name', 'Broker Name : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('broker_name', null, array('class' => 'form-control',  'placeholder' => 'Broker Name', 'required')) !!}
                    </div>
                </div>
                 <div class="form-group">
                    {!! Form::label('amount_of_money', 'Amount Of Money : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('amount_of_money', null, array('class' => 'form-control',  'placeholder' => 'Amount Of Money', 'required')) !!}
                    </div>
                </div>     

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div> 
        </div> 
    </div>
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-3" class="collapsed" aria-expanded="false">
                    Primary Medical Test Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-3" class="panel-collapse collapse"> 

            <!--  -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 2], 'class' => 'form-horizontal','files' => true)) !!}


                <a href="#" class="list-group-item active posting-modal-header">
                    Primary Medical Test Info.
                </a>
                <div class="form-group">
                    {!! Form::label('medical_test_status', 'Status : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::select('medical_test_status', $fit_statuses ,$passport_making->medical_test_status, array('class' => 'form-control')) !!}
                    </div>
                </div>
                 <div class="form-group">
                    {!! Form::label('medical_test_file_upload', 'File : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::hidden('medical_test_file_upload',null, array('id' => 'medical_test_file_upload')) !!}
                    
                        <div class="dropzone" id="medical"></div>
                    </div>
                </div>  
                <div class="form-group">
                    {!! Form::label('medical_test_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('medical_test_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>     

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}    
            </div> 



        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-4" class="collapsed" aria-expanded="false">
                    Gamcca Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-4" class="panel-collapse collapse"> 
            <!-- Gamcca Info. -->
            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 3], 'class' => 'form-horizontal','files' => true)) !!}


                <a href="#" class="list-group-item active posting-modal-header">
                    Gamcca Info.
                </a>
                <div class="form-group">
                    {!! Form::label('gamcca_amount_of_money', 'Amount of Money : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('gamcca_amount_of_money', null, array('class' => 'form-control',  'placeholder' => 'Amount of Money', 'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('gamcca_date', 'Date: ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('gamcca_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>   

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div>
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-5" aria-expanded="false" class="collapsed">
                    Enzaz Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-5" class="panel-collapse collapse"> 
            <!-- Enzaz Info.. -->
            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 4], 'class' => 'form-horizontal','files' => true)) !!}

                <a href="#" class="list-group-item active posting-modal-header">
                    Enzaz Info.
                </a>
                <div class="form-group">
                    {!! Form::label('enzaz_amount_of_money', 'Amount of Money : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('enzaz_amount_of_money', null, array('class' => 'form-control',  'placeholder' => 'Amount of Money', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('enzaz_okala_name', 'Okala Name : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('enzaz_okala_name', null, array('class' => 'form-control',  'placeholder' => 'Okala Name', 'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('enzaz_file_upload', 'File : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::hidden('enzaz_file_upload',null, array('id' => 'enzaz_file_upload')) !!}
                    
                        <div class="dropzone" id="enzaz_file"></div>
                    </div>
                </div>
                 <div class="form-group">
                    {!! Form::label('enzaz_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('enzaz_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>     

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div>
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-6" aria-expanded="false" class="collapsed">
                    Fit Receive Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-6" class="panel-collapse collapse"> 
            <!-- Fit Receive Info. -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 5], 'class' => 'form-horizontal','files' => true)) !!}

                <a href="#" class="list-group-item active posting-modal-header">
                    Fit Receive Info.
                </a>
                <div class="form-group">
                    {!! Form::label('fit_receive_medical_name', 'Medical Name : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('fit_receive_medical_name', null, array('class' => 'form-control',  'placeholder' => 'Medical Name', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('fit_receive_file_upload', 'File : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::hidden('fit_receive_file_upload',null, array('id' => 'fit_receive_file_upload')) !!}
                    
                        <div class="dropzone" id="fit_receive_file"></div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('fit_receive_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('fit_receive_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>   

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div> 
        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-7" aria-expanded="false" class="collapsed">
                    Police Paper Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-7" class="panel-collapse collapse"> 
            <!-- Police Paper Info. -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 6], 'class' => 'form-horizontal','files' => true)) !!}

                <a href="#" class="list-group-item active posting-modal-header">
                    Police Paper Info.
                </a>
                <div class="form-group">
                    {!! Form::label('police_paper_status', 'Status : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::select('police_paper_status', $statuses, $passport_making->police_paper_status, array('class' => 'form-control', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('police_paper_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('police_paper_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>
                     

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-8" aria-expanded="false" class="collapsed">
                    Embassy Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-8" class="panel-collapse collapse"> 
            <!-- Embassy Info. -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 7], 'class' => 'form-horizontal','files' => true)) !!}


                <a href="#" class="list-group-item active posting-modal-header">
                    Embassy Info.
                </a>
                <div class="form-group">
                    {!! Form::label('embassy_visa_stamping_status', 'Status : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::select('embassy_visa_stamping_status', $statuses, $passport_making->embassy_visa_stamping_status, array('class' => 'form-control', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('embassy_file_upload', 'File : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::hidden('embassy_file_upload',null, array('id' => 'embassy_file_upload')) !!}
                    
                        <div class="dropzone" id="embassy_file"></div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('embassy_sponsor_name', 'Sponsor Name : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('embassy_sponsor_name', null, array('class' => 'form-control',  'placeholder' => 'Sponsor Name', 'required')) !!}
                    </div>
                </div>
                 <div class="form-group">
                    {!! Form::label('embassy_date', 'Date: ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('embassy_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>     

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-9" aria-expanded="false" class="collapsed">
                     Fingering Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-9" class="panel-collapse collapse"> 
            <!--  Fingering Info -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 8], 'class' => 'form-horizontal','files' => true)) !!}


                <a href="#" class="list-group-item active posting-modal-header">
                    Fingering Info.
                </a>
                <div class="form-group">
                    {!! Form::label('fingering_status', 'Status : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::select('fingering_status', $statuses, $passport_making->fingering_status, array('class' => 'form-control', 'required')) !!}

                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('fingering_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('fingering_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>   

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-10" aria-expanded="false" class="collapsed">
                    Manpower Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-10" class="panel-collapse collapse"> 
            <!-- Manpower Info. -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 9], 'class' => 'form-horizontal','files' => true)) !!}


                <a href="#" class="list-group-item active posting-modal-header">
                    Manpower Info.
                </a>

                <div class="form-group">
                    {!! Form::label('manpower_status', 'Status : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::select('manpower_status', $statuses, $passport_making->manpower_status, array('class' => 'form-control', 'required')) !!}

                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('manpower_manpower_id', 'Manpower ID : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('manpower_manpower_id', null, array('class' => 'form-control',  'placeholder' => 'Manpower ID', 'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('manpower_national_id', 'National ID : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('manpower_national_id', null, array('class' => 'form-control',  'placeholder' => 'National ID', 'required')) !!}
                    </div>
                </div>
                 <div class="form-group">
                    {!! Form::label('manpower_visa_id', 'Visa ID : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('manpower_visa_id', null, array('class' => 'form-control',  'placeholder' => 'Visa ID', 'required')) !!}
                    </div>
                </div>    
                <div class="form-group">
                    {!! Form::label('manpower_date', 'Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('manpower_date', null, array('class' => 'form-control',  'placeholder' => 'Date', 'required')) !!}
                    </div>
                </div>  

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div> 
        </div> 
    </div> 
    <div class="panel panel-default"> 
        <div class="panel-heading"> 
            <h4 class="panel-title"> 
                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-11" aria-expanded="false" class="collapsed">
                    Ticket Info.
                </a> 
            </h4> 
        </div> 
        <div id="collapseTwo-11" class="panel-collapse collapse"> 
            <!-- Ticket Info. -->

            <div class="panel-body">
                <span class="error">
                    
                </span>
                {!! Form::model($passport_making,array('route' => ['passportmaking.update', $passport_making->id, 'type' => 10], 'class' => 'form-horizontal','files' => true)) !!}

                <a href="#" class="list-group-item active posting-modal-header">
                    Ticket Info.
                </a>
                <div class="form-group">
                    {!! Form::label('ticket_price_in_taka_and_dollar', 'Price in taka or dollar : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('ticket_price_in_taka_and_dollar', null, array('class' => 'form-control',  'placeholder' => 'Price in taka or dollar', 'required')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('ticket_flying_time', 'Flying Time : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::text('ticket_flying_time', null, array('class' => 'form-control',  'placeholder' => 'Flying Time', 'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('ticket_ticket_purchase_date', 'Purchase Date : ', array('class' => 'col-md-4 control-label')) !!}
                    <div class="col-md-6">
                        {!! Form::date('ticket_ticket_purchase_date', null, array('class' => 'form-control',  'placeholder' => 'Purchase Date', 'required')) !!}
                    </div>
                </div>    

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                        {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div> 
    </div>  
</div> 













