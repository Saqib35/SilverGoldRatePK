<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
    <channel>
        <title><![CDATA[ https://silvergoldrate.pk/ ]]></title>
        <link><![CDATA[ https://silvergoldrate.pk/feed ]]></link>
        <description><![CDATA[ Gold Rate in Pakistan Today ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>
  
        @foreach($posts as $post)
            <item>
                <title><![CDATA[{{ $post->title }}]]></title>
                <link>{{ url($post->slug) }}</link>
                <description><![CDATA[{!! $post->description_short !!}]]></description>
                <author><![CDATA[Staff]]></author>
                <guid>{{ $post->id }}</guid>
                <pubDate>{{ $post->updated_at->toRssString() }}</pubDate>
                <media:content url="{{ asset($post->img) }}" medium="image">
                    <media:description><![CDATA[{{ $post->alt_tag }}]]></media:description>
                    <media:credit><![CDATA[Gold Rate In pakistan]]></media:credit>
                </media:content>
            </item>
        @endforeach
    </channel>
</rss>
