@include('layout.partials._header')
	
<body>
	@include('layout.partials._navbar')

	@yield('content')

	@include('layout.partials._footer')
	@include('layout.partials._scripts')
	@yield('scripts')

</body>
</html>