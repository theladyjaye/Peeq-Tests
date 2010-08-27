<?php
require '../application/system/YSSEnvironment.php';
require '../application/system/YSSSecurity.php';
require '../application/data/YSSDomain.php';
require '../application/data/YSSCouchObject.php';
require '../application/data/YSSProject.php';
require '../application/data/YSSView.php';
require '../application/data/YSSState.php';
require '../application/data/YSSAnnotation.php';
require '../application/data/YSSTask.php';
require '../application/data/YSSNote.php';
require '../application/data/YSSAttachment.php';

if(AWS_S3_ENABLED) require 'Zend/Service/Amazon/S3.php';

$session  = YSSSession::sharedSession();
YSSDomain::delete($session->currentUser->domain);
YSSDomain::create($session->currentUser->domain);

// Projects
$p1 = new YSSProject();
$p1->label = "Lucy The Dog";
$p1->description = "Project Lucy";
$p1->_id = "project/lucy-the-dog";                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                           
$p2 = new YSSProject();                                                                                                                                                                                                                                                    
$p2->label = "Ollie";                                                                                                                                                                                                                                                       
$p2->description = "Project Ollie";
$p2->_id = "project/ollie";

$p3 = new YSSProject();                                                                                                                                                                                                                                                    
$p3->label = "YSS";                                                                                                                                                                                                                                                       
$p3->description = "Project YSS";
$p3->_id = "project/yss";

// Views
$v1 = new YSSView();
$v1->label       = "login";
$v1->description = "The login view";
$v1->_id         = "login";

$v2 = new YSSView();
$v2->label       = "logout";
$v2->description = "The logout view";
$v2->_id         = "logout";

$v3 = new YSSView();
$v3->label       = "Homepage";
$v3->description = "The homepage";
$v3->_id         = "homepage";

// States - we make new objects, because once one is saved, it will get an _id and a _rev and we don't want to reuse those dudes
$s1 = new YSSState();
$s1->label       = "default";
$s1->description = "default state";
$s1->_id         = "default";

$s2 = new YSSState();
$s2->label       = "default";
$s2->description = "default state";
$s2->_id         = "default";

$s3 = new YSSState();
$s3->label       = "default";
$s3->description = "default state";
$s3->_id         = "default";


// Tasks
$t1 = new YSSTask();
$t1->label = "Go for a walk";
$t1->description = "lorem ipsum dolor sit amet";
$t1->status = YSSTask::kStatusIncomplete;

$t2 = new YSSTask();
$t2->label = "Go for a ride";
$t2->description = "lorem ipsum dolor sit amet";
$t2->status = YSSTask::kStatusIncomplete;

$t3 = new YSSTask();
$t3->label = "Bark";
$t3->description = "lorem ipsum dolor sit amet";
$t3->status = YSSTask::kStatusComplete;

$t4 = new YSSTask();
$t4->label = "Stare at birds";
$t4->description = "lorem ipsum dolor sit amet";
$t4->status = YSSTask::kStatusIncomplete;

// Notes
$n1 = new YSSNote();
$n1->label = "Needs UX Review";
$n1->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$n2 = new YSSNote();
$n2->label = "Requires Technology Approval";
$n2->description = "lorem ipsum dolor sit amet";

$n3 = new YSSNote();
$n3->label = "Bark!";
$n3->description = "lorem ipsum dolor sit amet";

$n4 = new YSSNote();
$n4->label = "Needs UX Review";
$n4->description = "lorem ipsum dolor sit amet";

$n5 = new YSSNote();
$n5->label = "Impractical implementation";
$n5->description = "lorem ipsum dolor sit amet";

$n6 = new YSSNote();
$n6->label = "Requires client review";
$n6->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$n7 = new YSSNote();
$n7->label = "Meow!";
$n7->description = "lorem ipsum dolor sit amet";

$n8 = new YSSNote();
$n8->label = "This has been approved";
$n8->description = "lorem ipsum dolor sit amet";

$n9 = new YSSNote();
$n9->label = "This has been approved";
$n9->description = "lorem ipsum dolor sit amet";

$n10 = new YSSNote();
$n10->label = "Technology has questions";
$n10->description = "lorem ipsum dolor sit amet";

$n11 = new YSSNote();
$n11->label = "Technology has questions";
$n11->description = "lorem ipsum dolor sit amet";

$n12 = new YSSNote();
$n12->label = "This has been approved";
$n12->description = "lorem ipsum dolor sit amet";

$n13 = new YSSNote();
$n13->label = "This has been approved";
$n13->description = "lorem ipsum dolor sit amet";

$n14 = new YSSNote();
$n14->label = "Requires client approval";
$n14->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$n15 = new YSSNote();
$n15->label = "Requires client approval";
$n15->description = "lorem ipsum dolor sit amet";

$n16 = new YSSNote();
$n16->label = "Requires client approval";
$n16->description = "lorem ipsum dolor sit amet";

$n17 = new YSSNote();
$n17->label = "Technology has questions";
$n17->description = "lorem ipsum dolor sit amet";

$n18 = new YSSNote();
$n18->label = "Technology has questions";
$n18->description = "lorem ipsum dolor sit amet";

$n19 = new YSSNote();
$n19->label = "Technology has questions";
$n19->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


$p1->addView($v1);
$p1->addView($v2);
$p2->addView($v3);

$v1->addState($s1);
$v2->addState($s2);
$v3->addState($s3);

$a1          = YSSAttachment::attachmentWithLocalFileInDomain(YSSApplication::basePath().'/resources/img/fpo-comp-thumb.jpg', $session->currentUser->domain);
$a1->label   = "Lorem ipsum dolor sit amet";
$a1->_id     = $s1->_id.'/attachment/representation';

$a2          = YSSAttachment::attachmentWithLocalFileInDomain(YSSApplication::basePath().'/resources/img/fpo-comp-thumb.jpg', $session->currentUser->domain);
$a2->label   = "Lorem ipsum dolor sit amet";
$a2->_id     = $s2->_id.'/attachment/representation';

$a3          = YSSAttachment::attachmentWithLocalFileInDomain(YSSApplication::basePath().'/resources/img/fpo-comp-thumb.jpg', $session->currentUser->domain);
$a3->label   = "Lorem ipsum dolor sit amet";
$a3->_id     = $s3->_id.'/attachment/representation';


$a4          = YSSAttachment::attachmentWithLocalFileInDomain(YSSApplication::basePath().'/resources/img/fpo-comp-thumb.jpg', $session->currentUser->domain);
$a4->label   = "Lorem ipsum dolor sit amet";
$a4->_id     = $p1->_id.'/attachment/technical-spec';


$s1->addAttachment($a1);
$s2->addAttachment($a2);
$s3->addAttachment($a3);
$p1->addAttachment($a4);

// Add Tasks
$s1->addAnnotation($t1);
$s1->addAnnotation($t2);
$s1->addAnnotation($t3);
$s3->addAnnotation($t4);

// Add Notes
$s1->addAnnotation($n1);
$s1->addAnnotation($n2);
$s1->addAnnotation($n3);
$s1->addAnnotation($n4);
$s1->addAnnotation($n5);
$s1->addAnnotation($n6);
$s1->addAnnotation($n7);
$s1->addAnnotation($n8);
$s1->addAnnotation($n9);
$s1->addAnnotation($n10);
$s1->addAnnotation($n11);
$s1->addAnnotation($n12);

$s3->addAnnotation($n13);
$s3->addAnnotation($n14);
$s3->addAnnotation($n15);
$s3->addAnnotation($n16);
$s3->addAnnotation($n17);
$s3->addAnnotation($n18);
$s3->addAnnotation($n19);




$p3->save();
?>