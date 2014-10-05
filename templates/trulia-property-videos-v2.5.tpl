<videos>
{foreach $videos as $video}
    <video>
        <video-url>{$video->getVideoUrl()}</video-url>
        <video-caption>{$video->getVideoCaption()}</video-caption>
        <video-description>{$video->getVideoDescription()}</video-description>
        <video-seq-number>{$video->getVideoSeqNumber()|string_format:"%d"}</video-seq-number>
    </video>
{/foreach}
</videos>