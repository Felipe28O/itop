// Create variable so it can be used by the Dict class on initialization
var aDictEntries = {"UI:Combo:SelectValue":"--- seleccione un valor ---"};

// Check if Dict._entries already exists in order to complete, this is for async calls only.
// Note: We should not overload the WebPage::get_dict_file_content() in AjaxPage to put the part below as the same dict file can be consumed either by a regular page or an async page.
if ((typeof Dict != "undefined") && (typeof Dict._entries != "undefined")) {
	$.extend(Dict._entries, aDictEntries);
}