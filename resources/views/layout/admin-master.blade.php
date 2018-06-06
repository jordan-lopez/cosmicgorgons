@include('layout.partials._admin_header')

<body>
	@include('layout.partials._admin_sidebar')
	
	@include('layout.partials._admin_topbar')

	@yield('content')
	</div>
</div>
	@include('layout.partials._admin_scripts')
	
	@yield('scripts')
</body>
</html>