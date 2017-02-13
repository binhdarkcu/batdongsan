<html style="font: 9 pt 'MS Shell Dlg', Helvetica, sans-serif; width: 500px; height: 540px; "> <!-- ALL features enabled -->
<!-- <html style="font: 9 pt 'MS Shell Dlg', Helvetica, sans-serif; width: 470px; height: 454px; "> <!-- CREATE disabled -->
<!-- <html style="font: 9 pt 'MS Shell Dlg', Helvetica, sans-serif; width: 470px; height: 410px; "> <!-- UPLOAD disabled -->
<!-- <html style="font: 9 pt 'MS Shell Dlg', Helvetica, sans-serif; width: 470px; height: 368px; "> <!-- CREATE & UPLOAD disabled -->

<head>
<title>Insert Image</title>
<style type="text/css">
BODY { background: threedface; color: windowtext; font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; }

<!-- frame styles -->
IFRAME.lister { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 18em; height:13em; }
IFRAME.viewer { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 18em; height:13em; }

<!-- input styles -->
INPUT.folder { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 30em; }
INPUT.image { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 30em; }
INPUT.name { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 30em; }
INPUT.number { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 4em; }
INPUT.txtAltText { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 31em; }
INPUT.txtBorder { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 3.5em; }
INPUT.txtHorizontal { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 3.5em; }
INPUT.txtFileName { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 31em; }
INPUT.txtVertical { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 3.5em; }

<!-- button styles -->
INPUT.btnCancel { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 6em; }
INPUT.btnOK { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 6em; }
INPUT.create { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 4.5em; }
INPUT.upload { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 4.5em; }

<!-- drop-down styles -->
SELECT.selAlignment { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 6em; }

<!-- table styles -->
TABLE.dialog { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 36em; }

<!-- cell styles -->
TD.aspect { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 15em; }
TD.create { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 37em; }
TD.fldLayout { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 13em; }
TD.fldSpacing { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 10em; }
TD.image { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 40em; }
TD.label { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 5em; }
TD.manager { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 37em; }
TD.resize { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 30em; }
TD.upload { font: 9pt 'MS Shell Dlg', Helvetica, sans-serif; width: 37em; }
</style>

<!-- script copied from original "insert_image.html" -->
<script defer>
function _CloseOnEsc() {
    if(event.keyCode == 27) {
        window.close();
        return;
    }
}

function _getTextRange(elm) {
    var r = elm.parentTextEdit.createTextRange();

    r.moveToElementText(elm);
    return r;
}

window.onerror = HandleError

function HandleError(message, url, line) {
    var str = "An error has occurred in this dialog." + "\n\n"
               + "Error: " + line + "\n" + message;

    alert(str);
    window.close();
    return true;
}

function Init() {
    var elmSelectedImage;
    var htmlSelectionControl = "Control";
    var globalDoc = window.dialogArguments;
    var grngMaster = globalDoc.selection.createRange();
    var dpi = 96;

    if(document.all.dpicheck) {
        dpi = document.all.dpicheck.width;
    }
    document.all.lister.contentWindow.navigate('lister.php?DPI=' + dpi);
    document.all.viewer.contentWindow.navigate('viewer.php?DPI=' + dpi);
    document.all.actions.DPI.value = dpi;
    if(dpi != 96) {
        var xfactor = ((dpi < 96) ? (dpi / 95) : (dpi / 97.5));
        var yfactor = ((dpi < 96) ? (dpi / 95) : (dpi / 99.5));
        var width = dialogWidth.substr(0, dialogWidth.search(/\D/));
        var height = dialogHeight.substr(0, dialogHeight.search(/\D/));

        window.dialogWidth = Math.floor((width * xfactor)) + 'px';
        window.dialogHeight = Math.floor((height * yfactor)) + 'px';
    }

    // event handlers
    document.body.onkeypress = _CloseOnEsc;
    btnOK.onclick = new Function("OKClick()");

    txtFileName.fImageLoaded = false;
    txtFileName.intImageWidth = 0;
    txtFileName.intImageHeight = 0;

    if(globalDoc.selection.type == htmlSelectionControl) {
        if(grngMaster.length == 1) {
            elmSelectedImage = grngMaster.item(0);
            if(elmSelectedImage.tagName == "IMG") {
                txtFileName.fImageLoaded = true;
                if(elmSelectedImage.src) {
                    txtFileName.value          = elmSelectedImage.src.replace(/^[^*]*(\*\*\*)/, "$1");  // fix placeholder src values that editor converted to abs paths
                    txtFileName.intImageHeight = elmSelectedImage.height;
                    txtFileName.intImageWidth  = elmSelectedImage.width;
                    txtVertical.value          = elmSelectedImage.vspace;
                    txtHorizontal.value        = elmSelectedImage.hspace;
                    txtBorder.value            = elmSelectedImage.border;
                    txtAltText.value           = elmSelectedImage.alt;
                    selAlignment.value         = elmSelectedImage.align;
                }
            }
        }
    }

    txtFileName.value = txtFileName.value || "http://";
    txtFileName.focus();
}

function _isValidNumber(txtBox) {
    var val = parseInt(txtBox);

    if(isNaN(val) || val < 0 || val > 999) {
        return false;
    }
    return true;
}

function OKClick() {
    var elmImage;
    var intAlignment;
    var htmlSelectionControl = "Control";
    var globalDoc = window.dialogArguments;
    var grngMaster = globalDoc.selection.createRange();

    // error checking
    if(!txtFileName.value || txtFileName.value == "http://") {
        alert("Image URL must be specified.");
        txtFileName.focus();
        return;
    }
    if(txtHorizontal.value && !_isValidNumber(txtHorizontal.value)) {
        alert("Horizontal spacing must be a number between 0 and 999.");
        txtHorizontal.focus();
        return;
    }
    if(txtBorder.value && !_isValidNumber(txtBorder.value)) {
        alert("Border thickness must be a number between 0 and 999.");
        txtBorder.focus();
        return;
    }
    if(txtVertical.value && !_isValidNumber(txtVertical.value)) {
        alert("Vertical spacing must be a number between 0 and 999.");
        txtVertical.focus();
        return;
    }

    // delete selected content and replace with image
    if(globalDoc.selection.type == htmlSelectionControl && !txtFileName.fImageLoaded) {
        grngMaster.execCommand('Delete');
        grngMaster = globalDoc.selection.createRange();
    }

    idstr = "\" id=\"556e697175657e537472696e67";     // new image creation ID
    if(!txtFileName.fImageLoaded) {
        grngMaster.execCommand("InsertImage", false, idstr);
        elmImage = globalDoc.all['556e697175657e537472696e67'];
        elmImage.removeAttribute("id");
        elmImage.removeAttribute("src");
        grngMaster.moveStart("character", -1);
    }
    else {
        elmImage = grngMaster.item(0);
        if(elmImage.src != txtFileName.value) {
            grngMaster.execCommand('Delete');
            grngMaster = globalDoc.selection.createRange();
            grngMaster.execCommand("InsertImage", false, idstr);
            elmImage = globalDoc.all['556e697175657e537472696e67'];
            elmImage.removeAttribute("id");
            elmImage.removeAttribute("src");
            grngMaster.moveStart("character", -1);
            txtFileName.fImageLoaded = false;
        }
        grngMaster = _getTextRange(elmImage);
    }

    if(txtFileName.fImageLoaded) {
        elmImage.style.width = txtFileName.intImageWidth;
        elmImage.style.height = txtFileName.intImageHeight;
    }

    if(txtFileName.value.length > 2040) {
        txtFileName.value = txtFileName.value.substring(0,2040);
    }

    elmImage.src = txtFileName.value;

    if(txtHorizontal.value != "") {
        elmImage.hspace = parseInt(txtHorizontal.value);
    }
    else {
        elmImage.hspace = 0;
    }

    if(txtVertical.value != "") {
        elmImage.vspace = parseInt(txtVertical.value);
    }
    else {
        elmImage.vspace = 0;
    }

    elmImage.alt = txtAltText.value;

    if(txtBorder.value != "") {
        elmImage.border = parseInt(txtBorder.value);
    }
    else {
        elmImage.border = 0;
    }

    elmImage.align = selAlignment.value;
    grngMaster.collapse(false);
    grngMaster.select();
    window.close();
}
</script>

</head>

<body onload="Init()">
<img id="dpicheck" style="position: absolute; left: 1; top: 1; width: 1in; height: 1; visibility: hidden;" src="dpi.gif">
<table class="dialog" border="0" cellpadding="0" cellspacing="5">
  <tr>
    <td>
      <table name="manager" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="manager" colspan="3" align="center" valign="middle">
            <fieldset>
              <legend align="left">Image Manager</legend>
              <table name="wrapper" border="0" cellpadding="2" cellspacing="0">
                <tr>
                  <td>
                    <iframe class="lister" name="lister" marginwidth="0" marginheight="0"></iframe>
                  </td>
                  <td>
                    <iframe class="viewer" name="viewer" marginwidth="0" marginheight="0"></iframe>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <form name="actions" method="POST" action="lister.php" enctype="multipart/form-data" target="lister">
                      <table border="0" cellpadding="0" cellspacing="0">
<!-- BEGIN 'UPLOAD' HTML (delete the '>' at the end of this comment to disable the 'UPLOAD' feature) -->
                        <tr>
                          <td class="upload" colspan="2">
                            <fieldset>
                              <legend align="left">Upload New Image</legend>
                              <table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                  <td class="label" align="left" valign="middle">
                                    <input class="upload" type="submit" value="Upload" onclick="this.form.action.value='upload'">&nbsp;
                                  </td>
                                  <td colspan="2">
                                    <input class="image" type="file" name="image">
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label" align="left" valign="middle">
                                    Name as:
                                  </td>
                                  <td colspan="2">
                                    <input class="name" type="input" name="name">
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label" align="left" valign="middle">
                                    Resize to:
                                  </td>
                                  <td class="resize" align="left" valign="middle">
                                    <input class="number" type="input" name="width">
                                    &nbsp;&#215;&nbsp;
                                    <input class="number" type="input" name="height">
                                    <i>
                                      &nbsp;(width &#215; height)&nbsp;
                                    </i>
                                  </td>
                                  <td class="aspect" align="left" valign="middle">
                                    <input type="checkbox" name="aspect" checked>
                                    Preserve aspect ratio
                                  </td>
                                </tr>
                              </table>
                            </fieldset>
                          </td>
                        </tr>
<!-- END 'UPLOAD' HTML -->
<!-- BEGIN 'CREATE' HTML (delete the '>' at the end of this comment to disable the 'CREATE' feature) -->
                        <tr>
                          <td class="create" colspan="2">
                            <fieldset>
                              <legend align="left">Create New Folder</legend>
                              <table border="0" cellpadding="1" cellspacing="0">
                                <tr>
                                  <td class="label" align="left" valign="top">
                                    <input class="create" type="submit" value="Create" onclick="this.form.action.value='create'">&nbsp;
                                  </td>
                                  <td>
                                    <input class="folder" type="input" name="folder">
                                  </td>
                                </tr>
                              </table>
                            </fieldset>
                          </td>
                        </tr>
<!-- END 'UPLOAD' HTML -->
                      </table>
                      <input type="hidden" name="DPI" value="">
                      <input type="hidden" name="action" value="">
                      <input type="hidden" name="path" value="">
                    </form>
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>
        </tr>
        <tr>
          <td class="image" colspan="3" valign="middle">
            <fieldset>
              <legend align="left">Selected Image</legend>
              <table border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td class="label" valign="middle">Image URL:</td>
                  <td valign="middle">
                    <input class="txtFileName" type="text" name="txtFileName" onfocus="select()">
                  </td>
                </tr>
                <tr>
                  <td class="label" valign="middle">Alt Text:</td>
                  <td valign="middle">
                    <input class="txtAltText" type="text" name="txtAltText" onfocus="select()">
                  </td>
                </tr>
              </table>
            </fieldset>
          </td>
        </tr>
        <tr>
          <td class="fldLayout">
            <fieldset name="fldLayout">
              <legend align="left">Layout</legend>
              <table border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td class="label" valign="middle">Alignment:</td>
                  <td valign="middle">
                    <select class="selAlignment" size="1" name="selAlignment">
                      <OPTION id="optNotSet" value="">(none)</OPTION>
                      <OPTION id="optAbsBottom" value="absbottom">absbottom</OPTION>
                      <OPTION id="optAbsMiddle" value="absmiddle">absmiddle</OPTION>
                      <OPTION id="optBaseline" value="baseline" selected>baseline</OPTION>
                      <OPTION id="optBottom" value="bottom">bottom</OPTION>
                      <OPTION id="optLeft" value="left">left</OPTION>
                      <OPTION id="optMiddle" value="middle">middle</OPTION>
                      <OPTION id="optRight" value="right">right</OPTION>
                      <OPTION id="optTexttop" value="texttop">texttop</OPTION>
                      <OPTION id="optTop" value="top">top</OPTION>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="label" valign="middle">Border:</td>
                  <td valign="middle">
                    <input class="txtBorder" type="text" name="txtBorder" size="3" maxlength="3" onfocus="select()">
                  </td>
                </tr>
              </table
            ></fieldset>
          </td>
          <td class="fldSpacing">
            <fieldset name="fldSpacing">
              <legend align="left">Spacing</legend>
              <table border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td class="label" valign="middle">Horizontal:</td>
                  <td valign="middle">
                    <input class="txtHorizontal" type="text" name="txtHorizontal" size="3" maxlength="3" onfocus="select()">
                  </td>
                </tr>
                <tr>
                  <td class="label" valign="middle">Vertical:</td>
                  <td valign="middle">
                    <input class="txtVertical" type="text" name="txtVertical" size="3" maxlength="3" onfocus="select()">
                  </td>
                </tr>
              </table
            ></fieldset>
          </td>
          <td valign="bottom">
            <table align="right" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td valign="middle">
                  <input class="btnOK" type="submit" value="OK" name="btnOK">
                </td>
              </tr>
              <tr>
                <td valign="middle">
                  <input class="btnCancel" type="reset" value="Cancel" name="btnCancel" onClick="window.close();">
                </td>
              </tr>
            </table
          ></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>

</html>
