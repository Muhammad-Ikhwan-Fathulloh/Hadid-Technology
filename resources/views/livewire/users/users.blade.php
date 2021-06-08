<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card border-primary mb-3">
	  <div class="card-body">
	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($users as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->id }}</td>
					<td>{{ $datas->name }}</td>
					<td>{{ $datas->email }}</td>
					<td>
						<a href="" class="btn btn-sm btn-success"><i class="fas fa-fw fa-eye"></i> Lihat</a>
						<br>
						<br>
						<a href="" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pen"></i> Ubah</a>
						<br>
						<br>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fas fa-fw fa-trash"></i> Hapus</button>
						<!-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a> -->
					</td>
				</tr>
			@endforeach


		</tbody>
	</table>
	  </div>
	</div>
</div>
