<div class="ui container">
    <div class="ui segment widget survey bordered">
        <div class="widget-head ui dividing header">
            <h1>Survey</h1>
            <i class="list icon badge"></i>
        </div>
        <div class="widget-body">
            <div id="form" class="ui form survey-radiobuttons">
                <h4>What type of radio station do you listen to the most?</h4>
                <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="survey" tabindex="0" class="hidden" id="independent">
                    <label class="survey-checkbox__item" for="independent">
                        Independent Radio
                    </label>
                </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="survey" tabindex="0" class="hidden" id="national">
                        <label class="survey-checkbox__item" for="national">
                            National BBC Radio
                        </label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="survey" tabindex="0" class="hidden" id="midwest">
                        <label class="survey-checkbox__item" for="midwest">
                            Mid West Radio
                        </label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="survey" tabindex="0" class="hidden" id="community">
                        <label class="survey-checkbox__item" for="community">
                            Community Radio
                        </label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="survey" tabindex="0" class="hidden" id="other">
                        <label class="survey-checkbox__item" for="other">
                            Other
                        </label>
                    </div>
                </div>
                <div class="buttons-groups">
                    <button class="large ui disabled button" name="results">Results</button>
                    <button id="submit-vote" class="large ui primary button" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-body">
        <div class="ui form survey-results" style="display: none">
            <h4>What type of radio station do you listen to the most?</h4>
            <div class="field">
                <div class="ui progress" data-percent="25" id="opinion1">
                <div class="label">Independent Radio</div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
                </div>
            </div>
            <div class="field">
                <div class="ui progress" data-percent="20" id="opinion2">
                    <div class="label">National BBC Radio</div>
                    <div class="bar">
                    <div class="progress"></div>
                    </div>
                </div>
                </div>
                <div class="field">
                <div class="ui progress" data-percent="40" id="opinion3">
                    <div class="label">Mid West Radio</div>
                    <div class="bar bar-maximum">
                        <div class="progress"></div>
                    </div>
                </div>
                </div>
                <div class="field">
                <div class="ui progress" data-percent="5" id="opinion4">
                    <div class="label">Community Radio</div>
                    <div class="bar">
                    <div class="progress"></div>
                    </div>
                </div>
                </div>
                <div class="field">
                <div class="ui progress" data-percent="10" id="opinion5">
                    <div class="label">Other</div>
                    <div class="bar">
                    <div class="progress"></div>
                    </div>
                </div>
                </div>
            <div class="buttons-groups">
                <button class="large ui disabled button" name="results">Results</button>
                <button class="large ui primary disabled button" type="submit">Submit</button>
            </div>
        </div>
    </div>
</div>