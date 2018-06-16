<h2 class="title">Archives</h2>
<ul>
	@foreach ($archives as $monthlyArchive)
		<li>
			<a href="/?month={{ $monthlyArchive['month'] }}&year={{ $monthlyArchive['year'] }}">{{ $monthlyArchive['month'] . ' ' . $monthlyArchive['year'] }}</a>	
		</li>
	@endforeach
</ul>
