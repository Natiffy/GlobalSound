
var topArtistName ="";

function getartistName(){
    // define api keys
var apiKey = '2513f9dc3de659db9a3037e4a1d7f278';
var apiSecret = 'ec63f89323357140f47c9f6e164a1ab9';
    // create a Cache object
    var cache = new LastFMCache();
    // create a LastFM object

    var lastfm = new LastFM({
        apiKey    : apiKey,
        apiSecret : apiSecret,
        cache     : cache


    });
    
	var name= $("#mySubmitd").val();

    var myMbid = "";
	lastfm.artist.search({artist:name}, {success:function(data){
	topArtistName = data.results.artistmatches.artist[0].name;


        lastfm.artist.getInfo({artist: topArtistName}, {success: function(data){

            // render the single artist info using 'lastfmTemplateArtistInfo' template
          //alert(data.artist.mbid);
            $('#top_artist').html(

                $('#lastfmTemplateArtistInfo').render(data.artist)

            );
            

            // load the artist's top tracks

            lastfm.artist.getTopTracks({artist: topArtistName, limit: 12}, {success: function(data){
 
 		myMbid = data.toptracks.track[0].mbid;
 		var h = data.toptracks.track[0].name;
 		//alert(h);


                // render the tracks using 'lastfmTemplateTracks' template

                $('#top_tracks').html(

                    $('#lastfmTemplateTracks').render(data.toptracks.track)
		                    			
                );
                
            
                

			 }});


	
  }}); 
	}});	
    };

<!--  ITunes Code-->
function performSearch() {

	var params = {
		term: topArtistName,
		country: 'US',
		media: 'music',
		entity: 'musicTrack',
		//attribute: 'artistTerm,albumTerm,songTerm,musicTrackTerm',
		limit: 12,
		callback: 'handleTunesSearchResults'
	};
	
	var params = urlEncode(params);
	var url = 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/wa/wsSearch?' + params;
	var html = '<script src="' + url + '"><\/script>';
	jQuery('head').append(html);
}


function handleTunesSearchResults(arg) {
	var results = arg.results;
	
	var html = '';
	for (var i = 0; i < results.length; i++) {
		var item = results[i];
		var obj = {
			source: 0,
			track_id: item.trackId,
			track_name: item.trackCensoredName,
			track_url: item.trackViewUrl,
			artist_name: item.artistName,
			artist_url: item.artistViewUrl,
			collection_name: item.collectionCensoredName,
			collection_url: item.collectionViewUrl,
			genre: item.primaryGenreName
		};
		results[i] = obj;

		html += '<div class="songs-search-result">';

		html += '<span class="label">Track:</span>{0}&nbsp;&nbsp;<br/>'.replace("{0}", obj.track_name);
		html += '<a href="{0}" target="_blank">Preview</a>&nbsp;&nbsp;<br/>'.replace("{0}", item.previewUrl);
		html += '<a href="{0}" target="_blank">Full Song</a>&nbsp;&nbsp;<br/>'.replace("{0}", obj.track_url);
		html += '<span class="label">Track Price:</span>{0} {1}<br/>'.replace("{0}", item.trackPrice).replace("{1}", item.currency);
		html += '<span class="label">Artist:</span><a href="{0}" target="_blank">{1}</a><br/>'.replace("{0}", obj.artist_url).replace("{1}", obj.artist_name);
		html += '<span class="label">Collection:</span><a href="{0}" target="_blank">{1}</a><br/>'.replace("{0}", obj.collection_url).replace("{1}", obj.collection_name);
		html += '<span class="label">Collection Price:</span>{0} {1}<br/>'.replace("{0}", item.collectionPrice).replace("{1}", item.currency);
		html += '<span class="label">Primary Genre:</span>{0}<br/>'.replace("{0}", obj.genre);

		html += '</div>';
	}
	jQuery('#itunes-results').html(html);
}		

<!-- End ITunes Code-->







