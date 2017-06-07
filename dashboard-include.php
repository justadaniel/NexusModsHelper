<div class="pages">
    <div data-page="settings" class="page">

        <div class="page-content">
            <div class="max-width-wrapper">
                <div class="content-block inset">
                    <div class="content-block-inner">
                        <p>Do you have an annoying white error box that pops up when trying to download a mod on the nexus? Well this site aims to solve that. Just copy and paste the URL of the mod you are trying to get. And then to get the file ID, right click the 'Download with NMM' button and click inspect in most browsers. Now look for the javascript code that looks something like the code below:</p>
                        <p><code>onclick="loadBox('http://www.nexusmods.com/skyrimspecialedition/ajax/downloadwithnmm?id=27010');return false;"</code></p>
                        <p>You want to copy the number that is associated with <code>id=XXXXX</code> and paste in the File ID field. After that just click submit and you are done!</p>
                    </div>
                </div>
                <div class="content-block-title">Fallout 4</div>
                <div class="list-block inset modManagerGroup">
                    <ul>
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Game</div>
                                    <div class="item-input">
                                        <select name="game">
                                            <option>Fallout4</option>
                                            <option>SkyrimSpecialEdition</option>
                                            <option>Skyrim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Mod URL</div>
                                    <div class="item-input">
                                        <input type="text" name="modURL" placeholder="https://www.nexusmods.com/fallout4/mods/7010/">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">File ID</div>
                                    <div class="item-input">
                                        <input type="text" name="nexusFileID" placeholder="85964">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="item-link list-button accent-color nexusModManagerOpen color-green">Open in Nexus Mod Manager</a>
                        </li>
                    </ul>
                </div>
                <div class="content-block-title">About</div>
                <div class="list-block inset">
                    <ul>
                        <li class="item-content">
                            <div class="item-inner">
                                <div class="item-title">Version</div>
                                <div class="item-after"><?php echo GetVersion(); ?></div>
                            </div>
                        </li>
                        <li class="item-content">
                            <div class="item-inner">
                                <div class="item-title">Build Number</div>
                                <div class="item-after"><?php echo GetBuildNumber(); ?></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list-block inset">
                    <ul>
                        <li>
                            <a href="#" class="item-link list-button accent-color check-for-updates">Check for Updates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>