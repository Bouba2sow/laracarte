@extends('layouts.base',['title'=>"Contact"])
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm offset-sm-2">
			<h2>Get in Touch</h2>
			<p>If you have any trouble with the service, please
				 <a href="mailto:boubaks85@yahoo.fr">
					 ask for help
				</a>
			</p>
			<form action="{{route('contact_path')}}" method="POST">
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="name" class="col-form-label col-form-label-sm">Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="name" id="name" class="form-control form-control-sm">
					
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="email" class="col-form-label col-form-label-sm">Email</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="email" id="email" class="form-control form-control-sm">
					
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="sr-only">Mesage</label>
					<textarea name="message" id="message" cols="15" rows="15" class="form-control"></textarea> 
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-block btn-dark"> Submit Enquiry</button>
				</div>

				
			</form>
		</div>
	</div>

</div>


@endsection