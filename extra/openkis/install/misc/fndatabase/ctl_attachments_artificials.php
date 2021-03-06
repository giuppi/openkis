<?xml version="1.0" encoding="UTF-8"?>
<?php exit(0);?>
<tables>			
    <field>
        <name>id</name>
        <primarykey>1</primarykey>
        <extra>autoincrement</extra>
        <type>string</type>
        <frm_show>0</frm_show>
    </field>
    <field>
        <name>codeartificial</name>
        <frm_i8n>code</frm_i8n>
        <type>string</type>
        <view_show>1</view_show>
        <foreignkey>ctl_artificials</foreignkey>
        <fk_link_field>code</fk_link_field>
        <fk_show_field>code,name</fk_show_field>
        <frm_showinlist>1</frm_showinlist>
    </field>
    <field>
        <name>name</name>
        <frm_i18n>name</frm_i18n>
    </field>

    <field>
        <name>file</name>
        <frm_it>File</frm_it>
        <type>file</type>
        <thumbsize>100</thumbsize>
        <view_tag>center</view_tag>
        <view_hiddentitle>1</view_hiddentitle>
    </field>
    <field>
        <name>description</name>
        <type>text</type>
        <frm_i18n>description</frm_i18n>
        <frm_rows>auto</frm_rows>
        <frm_cols>40</frm_cols>
    </field>
    <driver>mysql</driver>
</tables>
