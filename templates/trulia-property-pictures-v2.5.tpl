<pictures>
{foreach $pictures as $picture}
    <picture>
        <picture-url>{$picture->getPictureUrl()}</picture-url>
        <picture-caption>{$picture->getPictureCaption()}</picture-caption>
        <picture-description>{$picture->getPictureDescription()}</picture-description>
        <picture-seq-number>{$picture->getPictureSeqNumber()|string_format:"%d"}</picture-seq-number>
    </picture>
{/foreach}
</pictures>