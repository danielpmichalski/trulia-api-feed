<videos>
{foreach $videos as $video}
    <video>
        <video-url>{$video->getVideoUrl()}</video-url>
        <video-caption><![CDATA[{$video->getVideoCaption()}]]></video-caption>
        <video-description><![CDATA[{$video->getVideoDescription()}]]></video-description>
        <video-seq-number>{$video->getVideoSeqNumber()|string_format:"%d"}</video-seq-number>
    </video>
{/foreach}
</videos>