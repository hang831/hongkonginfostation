//https://www.hkepc.com/forum/viewthread.php?fid=26&tid=2355111
jQuery( function($) {
                $("#rss-feeds").rss("http://rss.weather.gov.hk/rss/WeatherWarningBulletin_uc.xml", {
                    entryTemplate: "<div class='card text-white bg-dark mb-3' > <h4 class='card-header'>{title}</h4> <br> <div class='card-body'>{body}</div></div>",
                    tokens: {                                                                                            
                        body: function(entry, tokens) {   
                          //console.log(entry);   
                            return "<h5>"+entry.contentSnippet+"</h5><br><a class='btn btn-primary' href="+entry.link+">查看詳情</a><br><br>";
                        }
                    }                                                   
                })
            })

