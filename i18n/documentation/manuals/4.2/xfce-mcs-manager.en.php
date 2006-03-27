<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Xfce 4 Settings Manager</title><link rel="stylesheet" href="../xfce.css" type="text/css"><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="#xfce-mcs-manager" title="Xfce 4 Settings Manager"><link rel="next" href="#manager-intro" title="Introduction"></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="article" lang="en"><div class="titlepage"><div><div><h1 class="title"><a name="xfce-mcs-manager"></a>Xfce 4 Settings Manager</h1></div><div><div class="authorgroup"><div class="author"><h3 class="author"><span class="firstname">Fran�ois</span> <span class="surname">Le Clainche</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p></div></div></div><div class="author"><h3 class="author"><span class="firstname">Jasper</span> <span class="surname">Huijsmans</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt></p></div></div></div></div></div><div><span xmlns="http://www.w3.org/TR/xhtml1/transitional" class="releaseinfo">This manual describes <b xmlns="" class="application"><tt>xfce-mcs-manager</tt></b> version 4.2.0<br></br></span></div><div><p class="copyright">Copyright � 2004 Fran�ois Le Clainche</p></div><div><p class="copyright">Copyright � 2004 Jasper Huijsmans</p></div></div><hr></div><div class="toc"><p><b>Table of Contents</b></p><dl><dt><span class="sect1"><a href="#manager-intro">Introduction</a></span></dt><dt><span class="sect1"><a href="#manager-dialog">Settings Manager Dialog</a></span></dt><dd><dl><dt><span class="sect2"><a href="#id2533406">Opening the dialog</a></span></dt><dt><span class="sect2"><a href="#id2533451">Using the dialog</a></span></dt></dl></dd><dt><span class="sect1"><a href="#manager-backend">Settings Manager Backend</a></span></dt><dt><span class="sect1"><a href="#manager-copyright">About Xfce 4 Settings Manager</a></span></dt></dl></div><p>�</p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="manager-intro"></a>Introduction</h2></div></div></div><p>The Xfce 4 settings manager provides access to the settings of all
    Xfce 4 components. The application consists of two parts. The settings
    manager dialog, which is the only part a user should need to know about,
    and the settings manager backend that <span class="emphasis"><em>talks</em></span> to the
    Xfce 4 programs and informs them of changes to the preferences.
  </p><p>On a technical note, the settings manager backend uses an the 
    XSETTINGS protocol as defined on freedesktop.org, adapted to allow multiple
    channels, so a module can listen only to changes it is interested in; The 
    mcs in the name stands for <span class="emphasis"><em>multichannel settings</em></span>.
  </p></div><p>�</p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="manager-dialog"></a>Settings Manager Dialog</h2></div></div></div><div class="sect2" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="id2533406"></a>Opening the dialog</h3></div></div></div><p>There are several ways to open the settings manager dialog.</p><p>First of all, you can open it from the Xfce 4 panel. There is a
      launcher on the panel in the default configuration. If you want you can
      also add a special setup button that is part of the Systemsbuttons item.
    </p><div class="figure"><a name="smgr-setup-button-fig"></a><p class="title"><b>Figure�1.�Setup button on Xfce 4 panel</b></p><div class="screenshot"><div class="mediaobject"><img src="images/smgr_from_setup_button.png" alt="Shows setup button on Xfce 4 panel, used to open the 
	      settings manager dialog.
	    "></div></div></div><p>The root window menu provided by the Xfce 4 Desktop Manager
      (<b class="application"><tt>xfdesktop</tt></b>) contains an entry to open the
      settings manager dialog. Right-click on the desktop background and 
      choose <span><b class="guibutton">Xfce 4 Settings Manager</b></span> in the 
      <span><b class="guibutton">Settings</b></span> sub-menu.
    </p><div class="figure"><a name="smgr-root-menu-fig"></a><p class="title"><b>Figure�2.�Root window mouse menu</b></p><div class="screenshot"><div class="mediaobject"><img src="images/smgr_from_root_menu.png" alt="Shows root window mouse menu, used to open the settings
	      manager dialog.
	    "></div></div></div><p>Finally, you can open the settings manager dialog by running
      <b class="application"><tt>xfce-setting-show</tt></b>.
    </p></div><div class="sect2" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="id2533451"></a>Using the dialog</h3></div></div></div><p>The Xfce 4 Settings Manager dialog provides centralized access to 
      the preferences of all installed Xfce 4 components. They don't 
      necessarily have to be running.
    </p><div class="figure"><a name="smgr-dialog-fig"></a><p class="title"><b>Figure�3.�Settings Manager Dialog</b></p><div class="screenshot"><div class="mediaobject"><img src="images/settings_manager.png" alt="Shows settings manager dialog.
	    "></div></div></div><p>Just click on the button corresponding to the module that you
      want to configure. This action will open a new properties dialog.
      Usually, all modifications will have an immediate effect on the
      behaviour of the selected module (<span class="emphasis"><em>instant apply</em></span>).
      Once you have finished changing the options, you can close the dialog by
      clicking on the <span><b class="guibutton">Close</b></span> button. Note that there is
      no <span><b class="guibutton">Cancel</b></span>; if you change your mind about a
      setting you will manually have to change it back.
    </p><p>Please refer to the <a href="index.html" target="_top">manuals</a> of the
      different Xfce 4 components to learn more about their configuration
      options.
    </p></div></div><p>�</p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="manager-backend"></a>Settings Manager Backend</h2></div></div></div><p>The <b class="application"><tt>xfce-mcs-manager</tt></b> application should be
    started before the other Xfce 4 components. In fact, the panel and the
    windowmanager both will try to run the manager if it is not already
    running. 
  </p><p>The <b class="application"><tt>startxfce4</tt></b> script provided with
    Xfce 4 (part of the <span class="emphasis"><em>xfce-utils</em></span> package) takes care of 
    running it at the start of an X session. If you don't use that add it to
    your <tt class="filename">~/.xinitrc</tt> file. The manager will run in the
    background after it has initialized, so there is no need to add an '&amp;'
    after the command.
  </p><p>After installing a new package that provides a settings dialog, you can
    make the manager reread its configuration by sending a SIGUSR1 signal:
  </p><table border="0" bgcolor="#F3F4F8" width="100%"><tr><td><pre class="programlisting"> $ pkill -USR1 xfce-mcs-manager</pre></td></tr></table></div><p>�</p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="manager-copyright"></a>About Xfce 4 Settings Manager</h2></div></div></div><p>This package was written by Olivier Fourdan 
    (<tt class="email">&lt;<a href="mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>), Jasper Huijsmans
    (<tt class="email">&lt;<a href="mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>) and Benedikt Meurer
    (<tt class="email">&lt;<a href="mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). To find more information, please 
    visit the 
    <a href="http://www.xfce.org" target="_top">Xfce web site</a>. 
  </p><p>To report a bug or make a suggestion regarding this application or
    this manual, use the bug tracking system at <a href="http://bugzilla.xfce.org/" target="_top">http://bugzilla.xfce.org/</a>. 
  </p><p>If you have questions about the use or installation of this package,
    please ask on the <a href="http://lunar-linux.org/mailman/listinfo/xfce" target="_top">xfce</a> mailing list. Development discussion takes
    place on the <a href="http://lunar-linux.org/mailman/listinfo/xfce4-dev" target="_top">xfce4-dev</a> mailing list.
  </p><p> This program is distributed under the terms of the
    GNU Lesser General Public License as published by the Free Software 
    Foundation; either version 2 of the License, or (at your option) any 
    later version.
  </p><p>You should have received a copy of the GNU Lesser General Public 
    License along with this program; if not, write to the Free Software 
    Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, 
    USA.
  </p></div></div></body></html>
