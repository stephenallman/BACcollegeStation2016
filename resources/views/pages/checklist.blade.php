@extends('partials.master')



@section('content')

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3>403 Project Documentation</h3></div>
  <div class="panel-body">
    <p><strong>Project Manager:</strong> Phong Duong</p>
    <p><strong>BAC Project #:</strong> 10029960</p>
    <p><strong>Install date:</strong> 09/24/16</p>
    <p><strong>Commissioned:</strong> 10/01/16</p>
  </div>
  

<table>
 
  <thead>
    <th width="10%" align="center" padding="5px"><h4>Item</h4></th>
      <th width="60%" align= "center" padding="5px"><h4>Description</h4></th>
      <th width="15%" align="center" padding="5px"><h4>Required</h4></th>
       <th width="15%" align="center" padding="5px"><h4>Attachment</h4></th>
  </thead>
  <tbody>
    <tr class="firstRow">
      <td class="Item-cell">1</td>
      <td class="Description-cell">Engineering Driven Project Initiation Peer Review Meeting Held.  Required documentation identified by engineering team for specific project.</td>
      <td class="Required-cell"> Minutes</td>
      <td class="Attachments-cell"> 
            <a href= "{{ URL::to('src/docs/1-01_Checklist.pdf')}}" title="checklist">Peer Review</a><br/>
            <a href= "{{ URL::to('src/docs/1-02_MeetingMinutes.pdf')}}" title="meetingMinutes">Meeting Minutes</a>
      </td>
    </tr>
    
    <tr>
      <td class="Item-cell">2</td>
      <td class="Description-cell">One (1) set of CD’s issued for construction to Engineering during the implementation process</td>
      <td class="Required-cell"> Battery Specs</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/2-02_ ProjectSpecs266100.pdf')}}" title="specs">Battery Specs</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">3</td>
      <td class="Description-cell">One (1) copy in binder of site Specific Customized Operations and Maintenance (O&M) Manuals with an index and tab for each piece of equipment provided  (prior to commissioning of equipment) and sequence of operations for each major system</td>
      <td class="Required-cell">Submittals </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/3-01_Submittal266100-0001.pdf')}}" title="sub1">Submittal 1</a><br>
        <a href= "{{ URL::to('src/docs/3-02_Submittal266100-0002.pdf')}}" title="sub2">Submittal 2</a><br>
        <a href= "{{ URL::to('src/docs/3-03_Submittal266100-0003.pdf')}}" title="sub3">Submittal 3</a><br>
        <a href= "{{ URL::to('src/docs/3-04_EnersysLetter.pdf')}}" title="enersys-letter">Enersys Letter</a><br>
        <a href= "{{ URL::to('src/docs/3-05_UpdatedRuntimeCalculation.pdf')}}" title="runtime-calc">Updated Runtime</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">4</td>
      <td class="Description-cell">Warranty Information (prior to commissioning of equipment)</td>
      <td class="Required-cell"> Emerson:  Required</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/4-01_LiebertWarranty.pdf')}}" title="liebert-warranty">Liebert Warranty</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">5</td>
      <td class="Description-cell">Facility Engineering Training on equipment (prior to commissioning of equipment)</td>
      <td class="Required-cell"> Required</td>
      <td class="Attachments-cell"> 
         <a href= "{{ URL::to('src/docs/5-0_ AlberTraining.pdf')}}" title="alber-training">Alber Training</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">6</td>
      <td class="Description-cell">Two (2) complete sets of updated full size flow diagrams, electrical single lines and controls diagrams for the Facility which include the project work added to the existing drawing</td>
      <td class="Required-cell"> n/a</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/6-01_UpdatedFlowDiagrams.pdf')}}" title="flow-diagrams">Updated Flow Diagrams</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">7</td>
      <td class="Description-cell">One (1) copy of record as-built drawings for all disciplines, stamped and sealed</td>
      <td class="Required-cell">n/a </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/7-01_As-Built.pdf')}}" title="as-built">As Built Drawings</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">8</td>
      <td class="Description-cell">Point to Point diagrams for control and fire alarm systems</td>
      <td class="Required-cell"> n/a</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/8-01_PointToPointDiagrams.pdf')}}" title="point2point">Point to Point Diagrams</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">9</td>
      <td class="Description-cell">Updated electrical panel board schedules</td>
      <td class="Required-cell"> n/a</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/9-01_UpdatedPanelSchedules.pdf')}}" title="schedules">Panel Board Schedules</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">10</td>
      <td class="Description-cell">Final Commissioning Report including punch list items and commissioning scripts</td>
      <td class="Required-cell"> Emerson:  Commissioning/Discharge Test Reports</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/10-1_ExecutiveSummary.pdf')}}" title="executive-summary">Executive Summary</a><br>
        <a href= "{{ URL::to('src/docs/10-2_CxPlan.pdf')}}" title="cx-plan">Commissioning Plan</a><br>
        <a href= "{{ URL::to('src/docs/10-3_BatteryTestScript.pdf')}}" title="script-1">Testing Script 1</a><br>
        <a href= "{{ URL::to('src/docs/10-3_BatteryTestScript2.pdf')}}" title="script-2">Testing Script 2</a><br>
        <a href= "{{ URL::to('src/docs/10-4_ATS CommissioningReport.pdf')}}" title="ats-report">ATS Report</a><br>
        <a href= "{{ URL::to('src/docs/10-5_BatteryStringCab1.pdf')}}" title="cabinet-1-report">Cabinet 1 Report</a><br>
        <a href= "{{ URL::to('src/docs/10-5_BatteryStringCab 2.pdf')}}" title="cabinet-2-report">Cabinet 2 Report</a><br>
        <a href= "{{ URL::to('src/docs/10-6_DischargeTest.pdf')}}" title="discharge-test">Discharge Test</a><br>
        <a href= "{{ URL::to('src/docs/10-7_SpareBatteryString.pdf')}}" title="spare-batteries">Spare Batteries</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">11</td>
      <td class="Description-cell">Updated Arc Flash Analysis with stamped /dated seal by engineer of record</td>
      <td class="Required-cell">n/a </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/11-01_ArcFlashAnalysys.pdf')}}" title="arcflash-analysys">Arc Flash Analysys</a>
      </td>
    </tr>
   <tr>
      <td class="Item-cell">12</td>
      <td class="Description-cell">Final Test and Balance Reports</td>
      <td class="Required-cell">n/a </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/12-01_TestAndBalance.pdf')}}" title="test-and-balance">Test and Balance</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">13</td>
      <td class="Description-cell">Factory and or Acceptance Testing Reports (all levels 1-3)</td>
      <td class="Required-cell">n/a </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/13-01_FactoryAcceptanceTesting.pdf')}}" title="ftw">Factory Acceptance Testing</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">14</td>
      <td class="Description-cell">Equipment Inventory list in a format provided by the Facility Partner Chief Engineer. </td>
      <td class="Required-cell"> Required</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/14-01_Inventory.pdf')}}" title="inventory">Inventory</a>
      </td>
    </tr>
  <tr>
      <td class="Item-cell">15</td>
      <td class="Description-cell">Spare parts received based on list developed at Peer Review Meeting</td>
      <td class="Required-cell"> 6 Spare Batteries</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/15-01_SpareBatteries.pdf')}}" title="spare-batteries">Spare Batteries</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">16</td>
      <td class="Description-cell">Floor Mounted Label Plates for valves located under raised floor</td>
      <td class="Required-cell">n/a </td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/16-01_FloorLabels.pdf')}}" title="floor-lables">Floor Labels</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">17</td>
      <td class="Description-cell">Permanent nameplates identifying equipment, system accessories and controls</td>
      <td class="Required-cell"> n/a</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/17-01_EquipmentNameplates.pdf')}}" title="name-plates">Equipment Nameplates</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">18</td>
      <td class="Description-cell">One (1) copy of all applicable permits (safety/environmental/etc) and certifications as well as a Certificate of Inspection for all appropriate equipment and systems as required by local code. </td>
      <td class="Required-cell"> Death Certificates, Recycling, Chain of Custody;  Emerson and Enersys official letter certifying installation</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/18-01_SpentBatteryLetter.pdf')}}" title="spent-battery-letter">Spent Battery Letter</a><br>
        <a href= "{{ URL::to('src/docs/18-02_EnersysBOL.pdf')}}" title="Enersys-BOL">Enersys BOL</a><br>
        <a href= "{{ URL::to('src/docs/18-03_LiebertChainOfCustody.PDF')}}" title="chain-of-custody">Chain of Custody</a><br>
        <a href= "{{ URL::to('src/docs/18-04_ExideRecyclingCertificate.pdf')}}" title="recycling-certificate">Recyling Certificate</a>
      </td>
    </tr>
    <tr>
      <td class="Item-cell">19</td>
      <td class="Description-cell">Validation that all contractor locks have been removed</td>
      <td class="Required-cell"> Required</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/19-01_LockRemoval.pdf')}}" title="lock-removal">Lock Removal</a>
      </td>
    </tr>
   <tr>
      <td class="Item-cell">20</td>
      <td class="Description-cell">Two (2) external hard drives containing all of the requirements of Article 4.03 Attachment 1 Section 1.2 </td>
      <td class="Required-cell"> 3 external hard drives – 1 (Bank);  2 (JLL)</td>
      <td class="Attachments-cell"> 
        <a href= "{{ URL::to('src/docs/20-01_HardDriveRequirements.pdf')}}" title="hard-drive">Hard Drive Requirements</a>
      </td>
    </tr>

    <tr class="lastRow">
      <td class="Item-cell">21</td>
      <td class="Description-cell">Add asset data to 360 and ID|EA if applicable</td>
      <td class="Required-cell">Same as #14</td>
      <td class="Attachments-cell">
         <a href= "{{ URL::to('src/docs/14-01_Inventory.pdf')}}" title="inventory">360 Asset Data</a>
      </td>
    </tr>
    <tr class="lastRow">
      <td class="Item-cell">22</td>
      <td class="Description-cell">Extras</td>
      <td class="Required-cell">Enersys Charging Recommendation, </td>
      <td class="Attachments-cell">
         <a href= "{{ URL::to('src/docs/22-01_EnersysLetter.pdf')}}" title="enersys-letter">Enersys Charging Recommendation</a>
      </td>
    </tr>


  </tbody>
</table>

</div>
	

@include('partials.footer')
@stop
