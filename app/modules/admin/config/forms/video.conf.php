<?php
return array(   
    'method'        => 'post',
    'enctype'       => 'multipart/form-data',

    'groups' => array(

        'profile' => array(
            'legend' => 'Profile Information',
            'elements' => array(

                'name' => array('text', array(
                    'label' => 'Video Stream Name',
                    'class' => 'half-width',
                    'required' => true,
                )),

                'genre' => array('text', array(
                    'label' => 'Stream Genre',
                    'description' => 'Listed underneath the station in the player.',
                )),

                'country' => array('select', array(
                    'label' => 'Country of Broadcast',
                    'multiOptions' => \PVL\Internationalization::getCountryLookup(),
                    'default' => '',
                )),

                'image_url' => array('file', array(
                    'label' => 'Upload New Station Avatar (150x150 PNG)',
                    'description' => 'To replace the existing icon associated with this station, upload a new one using the file browser below. Icons should be 150x150px in dimension.',
                )),

                'banner_url' => array('file', array(
                    'label' => 'Upload New Promotional Banner (600x300 PNG)',
                    'description' => 'This image will be shown in the header rotator when events are promoted. Images should be 600x300.',
                )),

                'stream_url' => array('text', array(
                    'label' => 'Stream Broadcast URL',
                    'class' => 'half-width',

                    'description' => 'The address (including http[s]://) where listeners can tune in to your radio station or video stream."',
                    'required' => true,
                )),

                'nowplaying_url' => array('text', array(
                    'label' => 'Stream Now-Playing Data URL',
                    'class' => 'half-width',

                    'description' => 'This is optional and automatically provided by the stream URL, unless overridden for this specific stream."',
                )),

            ),
        ),

        'contact' => array(
            'legend' => 'Contact Information',
            'elements' => array(

                'web_url' => array('text', array(
                    'label' => 'Web URL',
                    'description' => 'Include full address (with http://).',
                    'class' => 'half-width',
                )),

                'contact_email' => array('text', array(
                    'label' => 'Contact E-mail Address',
                    'description' => 'Include to show an e-mail link for the station on the "Contact Us" page.',
                    'validators' => array('EmailAddress'),
                    'class' => 'half-width',
                )),

                'twitter_url' => array('text', array(
                    'label' => 'Twitter URL',
                    'description' => 'Include full address of the station\'s Twitter account (with http://).',
                    'class' => 'half-width',
                )),

                'facebook_url' => array('text', array(
                    'label' => 'Facebook URL',
                    'description' => 'Optional: This will be included in the "Contact Us" page if provided.',
                    'class' => 'half-width',
                )),

                'tumblr_url' => array('text', array(
                    'label' => 'Tumblr URL',
                    'description' => 'Optional: This will be included in the "Contact Us" page if provided.',
                    'class' => 'half-width',
                )),

                'gcal_url' => array('text', array(
                    'label' => 'Google Calendar XML Feed URL',
                    'description' => 'This URL can be retrieved by visiting Google Calendar, hovering over the station\'s calendar on the left sidebar, clicking the dropdown menu, then "Calendar Settings". From the settings page, click the "XML" link inside the Calendar Address area. Include full address of the feed (ending in /basic or /full) (with http://).',
                    'class' => 'half-width',
                )),

                'irc' => array('text', array(
                    'label' => 'IRC Channel Name',
                    'description' => 'Include hash tag: #channelname',
                )),

            ),
        ),

        'admin' => array(
            'legend' => 'Administrator Settings',
            'elements' => array(

                'is_active' => array('radio', array(
                    'label' => 'Is Active',
                    'description' => 'Is visible in the PVL network player interface.',
                    'multiOptions' => array(
                        1 => 'Yes',
                        0 => 'No',
                    ),
                    'default' => 1,
                )),

                'weight' => array('text', array(
                    'label' => 'Sort Order',
                    'description' => 'Lower numbers appear higher on the list of stations.',
                )),

            ),
        ),

        'submit_grp' => array(
            'elements'      => array(
                'submit'        => array('submit', array(
                    'type'  => 'submit',
                    'label' => 'Save Changes',
                    'helper' => 'formButton',
                    'class' => 'ui-button',
                )),
            ),
        ),
    ),
);