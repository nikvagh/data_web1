<div class="container-fluid">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>amount</th>
				<th>agent commission</th>
				<th>commission (%)</th>
				<th>Date</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($get as $key ) 
			<tr>
				<td>{{ $key->transactions_id }}</td>
				<td>{{ $key->amount }}</td>
				<td>{{ $key->agentcommission }}</td>
				<td>{{ $key->commission }}</td>
				<td>{{ $key->created_at }}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>