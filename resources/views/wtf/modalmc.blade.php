{{-- begin modal --}}



<!-- Modal Core -->

<div class="modal fade" id="mcformmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'mc.store', 'id' => 'mcpunyeform']) !!}
          <div class="form-group col-md-12">
            {{  Form::text('ptname', Null,['class' => 'form-control', 'placeholder' => 'Patient Name']) }}
          </div>
          <div class="form-group col-md-12">
            {{  Form::text('ptmat', Null,['class' => 'form-control', 'placeholder' => 'Matric Number']) }}
          </div>
          <div class="form-group col-md-12">
            {{  Form::text('ptprob', Null,['class' => 'form-control', 'placeholder' => 'Illness']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('mcform', 'Date Start', ['class' => 'control-label']) }}
            {{ Form::date('mcfrom', Null,['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('mcto', 'Date End', ['class' => 'control-label']) }}
            {{ Form::date('mcto', Null,['class' => 'form-control']) }}
          </div>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-simple submitmcpunyeform">Save</button>
      </div>
    </div>
  </div>
</div>
{{-- end modal --}}