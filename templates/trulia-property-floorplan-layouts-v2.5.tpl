<floorplan-layouts>
{foreach $floorplan_layouts as $floorplan_layout}
    <floorplan-layout>
        <floorplan-layout-url>{$floorplan_layout->getFloorplanLayoutUrl()}</floorplan-layout-url>
        <floorplan-layout-caption><![CDATA[{$floorplan_layout->getFloorplanLayoutCaption()}]]></floorplan-layout-caption>
        <floorplan-layout-description><![CDATA[{$floorplan_layout->getFloorplanLayoutDescription()}]]></floorplan-layout-description>
        <floorplan-layout-seq-number>{$floorplan_layout->getFloorplanLayoutSeqNumber()|string_format:"%d"}</floorplan-layout-seq-number>
    </floorplan-layout>
{/foreach}
</floorplan-layouts>