@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">
                                
							<table id="example" class="table table-striped display" style="width: 100%">
								<thead>
									<tr>
										<th>Judul Kegiatan</th>
										<th>Download</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_kegiatan as $result)
										<tr id="kid{{ $result->id }}">
											<td><a href="{{ url('kegiatan/' . $result->b0r1) }}">{{ $result->b0r1 }}</a></td>
											<td><a href="{{ url('/export_kegiatan/' . $result->id) }}" class="lnr lnr-download">Download</a> </td>
										</tr>
									@endforeach
								</tbody>
							</table>

                            </div>
                        </div>
	@endsection                  