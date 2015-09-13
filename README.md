# GlobalHack V

Source code repository for Justice League code

Auto github push script:
```
$  while [ true ]; do echo "Grabbing..."; rsync -avz pashleco@pashle.com:public_html . && git add . && git commit -m "Autocommit - $(date +%y%m%d-%H%M)" && git push origin HEAD; echo "Sleeping..."; sleep 60; done

```
2 Views exist with tables: 
Master_Citation_View and Master_Violation_View.  
These are separate in order to reduce issues with emulating full outer joins in mySQL and allow all possible results when starting from Citations or Violations as respective inputs.

--Random Queries
```
--Community Service Opportunities with Types for Opportunity review page
SELECT cso.OpportunityType,
       cso.Name,
       cso.fake_date_of_service,
       cso.city,
       cso.fake_hours_offered
  FROM pashleco_data.communityserviceopportunities cso
 WHERE (cso.OpportunityType IS NOT NULL)
ORDER BY cso.OpportunityType ASC
;
```
<br>
```
--Community Service Choice information for jquery popup if implemented on Opportunity Review Page
SELECT cso.Name,
       cso.Address,
       cso.city,
       cso.zip_code,
       cso.Contact,
       concat(cso.OtherInfo,' 'cso.Otherinfo2) as Other_Info
  FROM pashleco_data.communityserviceopportunities cso
 WHERE (cso.Name = :Name) --Parameter entry for specific Community Service Choice
 ;
 ```
 <br>
 ```
 --Social Security Authorization code to determine first_name match key from Last Name and SSN last 4 entry
 SELECT C.citation_number, --Choice of selection criteria may want to be limited further if not subset with application code
      C.citation_date,
      C.first_name,
      C.last_name,
      C.date_of_birth,
      C.defendant_address,
      C.defendant_city,
      C.defendant_state,
      C.drivers_license_number,
      C.court_date,
      C.court_location,
      C.court_address,
      v.citation_number,
      v.violation_number,
      v.violation_description,
      v.warrant_status,
      v.warrant_number,
      v.status,
      v.status_date,
      v.fine_amount,
      v.court_cost
 FROM socialsecurityauth S
      INNER JOIN  citations C
         ON C.first_name = S.first_name AND C.last_name = S.last_name
      LEFT OUTER JOIN violations v ON C.citation_number = v.citation_number
      where S.last_name=$last and S.last4ssn=$ssn --dollar signs instead of colons for DJ for use in his code if necessary
       ```
