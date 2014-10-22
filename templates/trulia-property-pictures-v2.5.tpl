<pictures>
{foreach $pictures as $picture}
    <picture>
        <picture-url><![CDATA[{$picture->getPictureUrl()}]]></picture-url>
        <picture-caption><![CDATA[{$picture->getPictureCaption()}]]></picture-caption>
        <picture-description><![CDATA[{$picture->getPictureDescription()}]]></picture-description>
        <picture-seq-number>{$picture->getPictureSeqNumber()|string_format:"%d"}</picture-seq-number>
    </picture>
{/foreach}
</pictures>