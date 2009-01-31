<?php include 'header.php'; ?>
<div style="float: right; font-size: 0.8em">&nbsp;<a href="data.php" class="a_back"></a>&nbsp;<a href="data.php"><?php echo _('What about my data?'); ?></a> | <a href="index.php" class="a_home"></a>&nbsp;|&nbsp;<a href="action.php"><?php echo _('See it in action!'); ?></a>&nbsp;<a href="action.php" class="a_forward"></a></div>

<h3 id="considerations"><?php echo _('Other considerations'); ?></h3>

<?php echo _('No operating system is perfect, and Linux is no exception. If it was perfect it wouldn\'t keep improving!'); ?><br />

<?php echo _('You might encounter some issues when moving to Linux so we want to let you know what you might encounter so you can make an informed decision.'); ?>

<h4 id="winsoftware"><?php echo _('Windows Software'); ?></h4>
<?php echo _('It is likely that much of your existing Windows software will not run on Linux natively. As discussed in the \'<a href="foss.php">What is FOSS?</a>\' section of this website, Linux is a completely different operating system and as such only software written for it will work. Fortunately there are hundreds of thousands of free software packages available for a whole host of purposes that may replace the need for your current software collection. A table of alternatives can be found <a target="_blank" href="http://www.linuxrsp.ru/win-lin-soft/table-eng.html">here</a> (note: external website, we maintain a backup <a href="table.php">here</a>).'); ?><br /><br />

<?php echo _('In some cases you may find that due to business or other reasons you have a particular software product that you absolutely must use and that there is no Linux equivalent. Don\'t despair, it may still be possible to \'make the move\'.'); ?>

<h4 id="emulators"><?php echo _('Windows Emulators'); ?></h4>

<?php echo _('There are some programs for Linux that let you run your Windows software under Linux via an \'emulation\' method. Some of these include <a href="http://www.vmware.com">Vmware</a>, <a href="http://www.win4lin.com/">Win4lin</a>, <a href="http://bochs.sourceforge.net/">bochs</a>, <a href="http://www.xensource.com/">xen</a> and <a href="http://www.qemu.com/">qemu</a>. You will need your own Windows license key and installation media as these types of software actually do a full installation of Windows under Linux. You can then start Windows like a normal Linux application and run your software under Windows itself.'); ?><br /><br />

<?php echo _('If emulation is not your style you can always run Linux side by side on your computer with your Windows installation and reboot into which ever one you need to use.'); ?><br /><br />

<?php echo _('There are some other programs which provide a compatibility layer for Linux to allow you to run Windows software without emulation. One such program is called <a target="_blank" href="http://winehq.org">wine</a>. Wine is not an emulator but mimics many of the Windows system functions (you do not need Windows installed on your computer). This allows you to install your Windows software through wine and then run it under Linux. Not all Windows software works using this method, but many (such as the Australian Tax Office\'s \'eTax\') work with minimum effort. There is a good resource online for which applications work under wine, <a target="_blank" href="http://appdb.winehq.org/">here</a>.'); ?><br /><br />

<?php echo _('Although wine allows you to install many Windows applications they can be tricky to get working. There is also a commercial product based on wine called <a href="http://codeweavers.com">CrossOver</a> created by Codeweavers. This software allows you to easily install many common types of Windows software such as: Microsoft Office (versions 2003, XP, 2000 and 97), Microsoft Project, Microsoft Visio, Adobe Photoshop, Lotus Notes, Quicken, Shockwave Director, QuickTime and many more, all under Linux. It is available to purchase online and provides you with support to help get your software running.'); ?><br /><br />

<?php echo _('Remember there are usually excellent open source alternatives to the Windows software you want to use, but if you absolutely have to run it, then one of the options above could be the answer.'); ?>

<h4 id="games"><?php echo _('Games'); ?></h4>
<?php echo _('Like other Windows based software mentioned above, most computer games will not run natively under Linux. Fortunately some game companies are beginning to improve these matters. There are a few however, like the Unreal Tournament and Quake series of games, which already run perfectly under Linux. The main reason for this is that they use the OpenGL 3D rendering engine, which is open source and runs under Linux natively. Many other games use Microsoft\'s closed source DirectX 3D engine which will only run on Windows. Once again wine comes to the rescue here as many games will run through it.'); ?><br /><br />

<?php echo _('As with \'Crossover\' above, there is a commercial product based on wine called <a href="http://cedega.com">Cedega</a> by TransGaming Technologies, which specialises in supporting almost two thousands of Windows games under Linux. Many popular games are supported such as Half Life 2, Counter Strike, Battlefield, Medal of Honor, Call of Duty, StarCraft, Civilization, Grand Theft Auto, Heroes of Might and Magic, EVE, EverQuest, World of Warcraft and many others. More information including a database of supported games can be found <a target="_blank" href="http://transgaming.org/gamesdb/">here</a>.'); ?><br /><br />

<?php echo _('Of course Linux comes with thousands of native games, ranging from arcade style to board games, strategy, role playing and even 3D first person shooters. Plenty to keep the children (and the child in you) well entertained!'); ?>

<h4 id="msformats"><?php echo _('Microsoft Office Compatibility'); ?></h4>
<?php echo _('We also discuss Microsoft Office formats in the \'<a href="data.php">What about my data?</a>\' section of this website. You may wish to also read it if you haven\'t already.'); ?><br /><br />

<?php echo _('Essentially, the file format for Microsoft Office documents is closed source and proprietary. Although Word and Excel files are the pseudo-standard in many business contexts, it is important to understand that the way in which the Microsoft Office suite of applications store your data on your computer\'s hard drive is not a standard.'); ?><br /><br />

<?php echo _('Fortunately, there are a number of excellent Linux applications which are great replacements for all of Microsoft Office\'s functionality. Even better, some programs like the <a href="http://openoffice.org">OpenOffice.org</a> suite can even read and write Microsoft Office files. As of version 2.0.4, OpenOffice.org supports Microsoft Office 95, 97, 2000, XP and also 2003 formats (as well as many others including export to PDF). While free open source software file formats exist for most things you are likely to want to do on your computer, you may experience problems when swapping complex Microsoft Office files (such as those with many macros), but it is always improving. As Microsoft owns the source code to these formats they can (and do) change the format with new releases. The default file format for OpenOffice.org however follows the recognised international open document standard <a target="_balnk" href="http://www.iso.org/iso/en/commcentre/pressreleases/2006/Ref1004.html">ISO26300</a> and thus will not change to be incompatible in the future. This means your documents are safe and secure no matter what software you choose to run down the track. Comforting to know, isn\'t it?'); ?><br /><br /> 


<?php echo _('If you require Microsoft Office support under Linux, OpenOffice.org should do almost everything you require (and more). You can also try out OpenOffice.org for yourself under Windows!'); ?>

<h4 id="hardware"><?php echo _('Hardware'); ?></h4>
<?php echo _('Linux supports more hardware devices out of the box than any other operating system, however there is a range of devices that do not work easily. Most of these are what is called \'win-hardware\'. These devices have a software component which needs to be installed on Windows in order for them work. As Linux does not run Windows software these devices are often hard to configure. Example devices include some wireless cards, some printers, and some internal dialup modems. In many cases the open source community has written their own Linux drivers for these devices, however in some cases the manufacturer may not release sufficient information to make this possible. Fortunately more and more manufacturers are supporting Linux, so hopefully this issue will soon be in the past.'); ?><br /><br />

<?php echo _('Linux supports almost every video card used today; however it may not always be able to take advantage of the 3D features of the card in a default installation. For example, while Linux supports NVIDIA cards well in the 2D arena, there is no open source 3D driver available for them. NVIDIA does provide excellent Linux drivers for their cards however, which take full advantage of their 3D features. You may need to obtain such drivers separately from the manufacturer (they are usually available on their website) to install them on your computer. This is due to licensing restrictions which prevent Linux distributions including them by default. Installation under various Linux distributions is usually well supported though and there are always people willing to help.'); ?>

<h4 id="codecs"><?php echo _('Codecs'); ?></h4>
<?php echo _('\'Codec\' stands for \'compressor/decompressor\' and relates to the software component which translates video and/or audio between its compressed (stored) form and it\'s uncompressed form (for display). QuickTime is an example of such a codec.'); ?><br /><br />

<?php echo _('Unfortunately many codecs for common video (and audio) formats have not been written for Linux. However there are packages such as win32codecs which allow Linux to use the Windows codecs to access these formats and play all your videos! Again, due to licensing restrictions many Linux distributions do not include these by default. These codecs are usually quite easy to install though, and there is usually lots of information on how to install them under your chosen version of Linux.'); ?><br /><br />

<?php echo _('Naturally, the open source community has its own free open source video and audio codecs. Perhaps two of the most well known are the audio codec called <a href="http://www.xiph.org/ogg/">oggvorbis</a> and the video codec called <a href="http://www.xvid.org/">xvid</a>. These codecs are not only open source, they are patent free. You can feel confident encoding your music and videos using these codecs and of course under Linux you don\'t have to worry about issues like <a target="_blank" href="http://en.wikipedia.org/wiki/Digital_rights_management">digital rights management</a>.'); ?>

<h4 id="dvds"><?php echo _('Encrypted DVDs'); ?></h4>
<?php echo _('When the DVD format was created it included a form of encryption that was designed to avoid unauthorised copying.  Software DVD players were then each given a decryption key to work with all DVDs.  For various reasons, official Linux DVD software players were not available. As it turned out, the encryption design had some issues and it was discovered that a key was not necessary to access the DVD information.'); ?><br /><br />

<?php echo _('There is a package called libdvdcss which can enable most Linux media players to decrypt and display your DVDs. The use of this package may not be legal in all countries even when used with your own, purchased DVDs. This is due to patent restrictions and digital copyright laws. As such, it is not included with most Linux distributions. If it is legal to use it in your location then installing it is usually pretty easy, but again there are always people willing to help you if needed.'); ?>

<h4 id="summary"><?php echo _('In Summary'); ?></h4>
<?php echo _('Linux has a great range of software applications to meet the software needs you may have. Furthermore there is wine, CrossOver, Cedega and other applications available to provide Windows compatibility for many other software products you may wish to use.'); ?><br /><br />

<?php echo _('As Linux gains in popularity, more and more devices are created to be compatible. There is a good chance that all of your hardware devices will work by default after a Linux install. However to take full advantage of your system you may need to install extra packages such as 3D video drivers and codecs for your commonly used media. Some cheaper \'win-hardware\' may not work well under Linux and you might have to wait a while for the latest game or Windows program to be supported through software like wine. If you fall into one of these categories, help to get your system up and running is always available.'); ?><br /><br />

<?php echo _('Hopefully this information will equip you to make a balanced decision on whether Linux is for you. We feel the pros of Linux far outweigh the cons. With the wide range of Linux software applications available, many of which you can test already on Windows, you may find that you don\'t encounter most of the above issues.'); ?><br /><br />

<div style="float: right; font-size: 0.8em">&nbsp;<a href="data.php" class="a_back"></a>&nbsp;<a href="data.php"><?php echo _('What about my data?'); ?></a> | <a href="index.php" class="a_home"></a>&nbsp;|&nbsp;<a href="action.php"><?php echo _('See it in action!'); ?></a>&nbsp;<a href="action.php" class="a_forward"></a></div>
<br />

<?php include 'footer.php'; ?>
