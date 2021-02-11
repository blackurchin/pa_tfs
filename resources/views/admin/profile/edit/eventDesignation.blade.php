<div class="form-row">
    <label class="text-center px-4">Type of Event :</label><span class="text-danger">*</span>
    <div class="form-group col-md-3">
        <select name="event" id="inputEvent" class="form-control custom-select my-1 mr-sm-2" required>
            <option value="IPAMS" {{ ($profile->event == 'IPAMS') ? 'selected' : '' }}>IPAMS</option>
            <option value="SELF" {{ ($profile->event == 'SELF') ? 'selected' : '' }}>SELF</option>
        </select>
    </div>
    <label class="text-center px-2">Designation:</label><span class="text-danger">*</span>
    <div class="form-group col-md-3">
        <select name="designation" id="inputDesignation" class="form-control custom-select my-1 mr-sm-2" required>
            <option value="Delegate" {{ ($profile->designation == 'Delegate') ? 'selected' : '' }}>Delegate</option>
            <option value="Head of Delegate" {{ ($profile->designation == 'Head of Delegate') ? 'selected' : '' }}>Head of Delegate</option>
            <option value="Spouses" {{ ($profile->designation == 'Spouses') ? 'selected' : '' }}>Spouses</option>
            <option value="Attache" {{ ($profile->designation == 'Attache') ? 'selected' : '' }}>Attache</option>
            <option value="Interpreter" {{ ($profile->designation == 'Interpreter') ? 'selected' : '' }}>Interpreter</option>
            <option value="Executive Assistant" {{ ($profile->designation == 'Executive Assistant') ? 'selected' : '' }}>Executive Assistant</option>
            <option value="PA Secretariat" {{ ($profile->designation == 'PA Secretariat') ? 'selected' : '' }}>PA Secretariat</option>
            <option value="USA Secretariat" {{ ($profile->designation == 'USA Secretariat') ? 'selected' : '' }}>USA Secretariat</option>
            <option value="Support Personnel" {{ ($profile->designation == 'Support Personnel') ? 'selected' : '' }}>Support Personnel</option>
        </select>
    </div>
</div>
