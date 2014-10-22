<virtual-tours>
{foreach $virtual_tours as $virtual_tour}
    <virtual-tour>
        <virtual-tour-url>{$virtual_tour->getVirtualTourUrl()}</virtual-tour-url>
        <virtual-tour-caption><![CDATA[{$virtual_tour->getVirtualTourCaption()}]]></virtual-tour-caption>
        <virtual-tour-description><![CDATA[{$virtual_tour->getVirtualTourDescription()}]]></virtual-tour-description>
        <virtual-tour-seq-number>{$virtual_tour->getVirtualTourSeqNumber()|string_format:"%d"}</virtual-tour-seq-number>
    </virtual-tour>
{/foreach}
</virtual-tours>