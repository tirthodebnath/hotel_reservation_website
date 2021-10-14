var galleryFeed= new Instafeed({
	
	
	get:"user",
	userId:16360389581,
	accessToken:"16360389581.1677ed0.7dfbefd046634e71b58144be56ec4468",
	
	resolution:"standard_resolution",
	
	useHttp:"true",
	
	limit:6,
	
	template:'<div class="col-sm-2"><img src="{{image}}" class="mb-4 p-2" style="width:200px;height:200px"></div>',
	
	target:"instafeed-galleryfeed"
	
	
	
});

galleryFeed.run();